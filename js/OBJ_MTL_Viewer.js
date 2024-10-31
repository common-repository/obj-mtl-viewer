/*
* options : 
*   id
*   camera.z, camera.y, camera.x, camera.fov
*   rotation.x, rotation.y, rotation.z
*   backgroundColor
*   ambientLight.color, ambientLight.intensity
*   directionalLight.color, directionalLight.intensity
*   path.obj, path.mtl
*   disableAutoRotate
*/

var OBJ_MTL_Viewer = function(options) {
  var self = this;
  
  self.options = options || {};

  // scene
  self.scene = new THREE.Scene();

  // enable caching to prevent re-downloading of assets
  THREE.Cache.enabled = true;

  // renderer container
  self.container = document.getElementById(self.options.id);

  // camera - angle, aspect, near, far
  self.camera = new THREE.PerspectiveCamera(30, 1, 0.1, 100000);

  // rotate camera to get an isometric view of object
  self.options.camera = self.options.camera || {};
  self.camera.position.z = self.options.camera.z === undefined ? 300 : self.options.camera.z;
  self.camera.position.y = self.options.camera.y === undefined ? 200 : self.options.camera.y;
  self.camera.position.x = self.options.camera.x === undefined ? 200 : self.options.camera.x;

  // renderer
  self.renderer = new THREE.WebGLRenderer();
  self.renderer.setPixelRatio(window.devicePixelRatio);
  self.options.backgroundColor = self.options.backgroundColor || 0xdddddd;
  self.renderer.setClearColor(self.options.backgroundColor);

  self.container.appendChild(self.renderer.domElement);

  // change size on window resize
  function resize () {
    self.renderer.setSize(self.container.clientWidth, self.container.clientHeight);
    self.camera.aspect = self.container.clientWidth / self.container.clientHeight;
    self.camera.updateProjectionMatrix();
  }
  window.addEventListener('resize', resize);
  resize();

  // add ambient light (uniform to all sides) to scene
  self.options.ambientLight = self.options.ambientLight || {};
  var ambientLight = new THREE.AmbientLight(self.options.ambientLight.color || 0xffffff, self.options.ambientLight.intensity || 0.5);
  self.scene.add(ambientLight);

  // add direction light (to one specific direction) to scene
  self.options.directionalLight = self.options.directionalLight || {};
  var directionalLight = new THREE.DirectionalLight(self.options.directionalLight.color || 0xffffff, self.options.directionalLight.intensity || 0.5);
  self.scene.add(directionalLight);


  // orbit controls
  var controls = new THREE.OrbitControls(self.camera, self.renderer.domElement);
  controls.enableDamping = true;
  controls.dampingFactor = 1.5;
  if(!(self.options.disableAutoRotate === true))
    controls.autoRotate = true;
  controls.addEventListener('change', syncLightWithCamera);
  function syncLightWithCamera () {
    // set light position same as camera
    directionalLight.position.copy(self.camera.position);
  }
  syncLightWithCamera();


  var object;
  var isAssetLoaded = true;
  var loaderClassList = self.container.getElementsByClassName('loading-overlay')[0].classList;
  window.c = (self.container)

  // function to set asset loaded as true or false and do required operations
  function setAssetLoadedStatus (_isAssetLoaded) {
    if (_isAssetLoaded === true) {  // if asset loaded, remove the loading spinner
      loaderClassList.remove('active');
      isAssetLoaded = true;
    } else {  // if asset loading add the loading spinner
      isAssetLoaded = false;
      loaderClassList.add('active');
    }
  }

  // function to remove previous object and add given object
  function loadAsset (path) {
    if (!isAssetLoaded)
      return false;
    setAssetLoadedStatus(false);
    // load object material (.mtl file)
    var mtlLoader = new THREE.MTLLoader();
    mtlLoader.load(path.mtl, (materials) => {
      materials.preload();

      // load object and add it to scene (.obj file)
      var objLoader = new THREE.OBJLoader();
      objLoader.setMaterials(materials);
      objLoader.load(path.obj, (obj) => {
        if (object)  //if object exists then remove it from scene first
          self.scene.remove(object);
        object = obj; //replace object with current one
        self.scene.add(object);  //add object to scene
        correctCamera();
        setAssetLoadedStatus(true);
      }, undefined, () => {
        window.alert('There was an error loading the object (.obj) file');
        setAssetLoadedStatus(true);
      });
    
    }, undefined, () => {  //on error
      window.alert('There was an error loading the material (.mtl) file.');
      setAssetLoadedStatus(true);
    });

  }

  // function to correct camera position, zoom etc.
  function correctCamera(){
    // reset camera controls
    controls.reset();
    
    // reset object
    object.lookAt(object.up)
    var box = new THREE.Box3().setFromObject( object );
    box.getCenter( object.position ); // this re-sets the object position
    object.position.multiplyScalar( -1 );

    // rotate object as necessary
    var rotation = self.options.rotation || {};
    if(rotation.x)
      object.rotation.x = rotation.x || 0;
    if(rotation.y)
      object.rotation.y = rotation.y || 0;
    if(rotation.z)
      object.rotation.z = rotation.z || 0;
    
    // zoom to fit object
    var boundingRadius = box.getBoundingSphere().radius;
    self.camera.fov = self.options.camera.fov || boundingRadius/3;
    self.camera.updateProjectionMatrix();
  }

  // function to update properties
  function update() {
    controls.update();
  }

  // function to render the scene and camera
  function render() {
    self.renderer.render(self.scene, self.camera);
  }

  // the loop in which update and render is called
  function play() {
    window.requestAnimationFrame(play);

    update();
    render();
  }

  // call the play function to start the loop
  play();


  //load the asset
  if(self.options.path && self.options.path.obj && self.options.path.mtl)
    loadAsset(self.options.path);
  else
    console.error('OBJ and/or MTL path not provided!')
}