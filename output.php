<?php if(isset($atts['obj']) && isset($atts['mtl']) && isset($atts['id'])) {?>

  <div class="obj_mtl-asset-renderer" id="<?php echo $atts['id'] ?>">
    <div class="loading-overlay">
      <div class="spinner"></div>
    </div>

    <p class="overlay-text hide-sm">
      <svg title="controls" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 210.414 210.414" style="enable-background:new 0 0 210.414 210.414;" xml:space="preserve"> <g> <g> <g> <path d="M105.207,0C66.532,0,35.069,31.45,35.069,70.104v70.21c0,38.653,31.463,70.1,70.138,70.1 c38.675,0,70.138-31.446,70.138-70.1v-70.21C175.345,31.45,143.881,0,105.207,0z M167.552,140.314 c0,34.357-27.968,62.307-62.345,62.307c-34.377,0-62.345-27.95-62.345-62.307v-70.21c0-34.357,27.968-62.311,62.345-62.311 c34.377,0,62.345,27.953,62.345,62.311V140.314z"/> <path d="M105.207,23.379c-2.152,0-3.897,1.743-3.897,3.897v35.286c0,2.154,1.745,3.897,3.897,3.897 c2.152,0,3.897-1.743,3.897-3.897V27.276C109.103,25.122,107.359,23.379,105.207,23.379z"/> </g></svg>
      Click and drag to rotate.
    </p>
    <p class="overlay-text hide-lg">
      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 399.07 399.07" style="enable-background:new 0 0 399.07 399.07;" xml:space="preserve"> <g> <path d="M365.083,74.011L348.113,57.04c-3.906-3.904-10.236-3.904-14.143,0c-3.873,3.873-3.899,10.129-0.091,14.042h-22.365 c-5.522,0-10,4.477-10,10c0,5.523,4.478,10,10,10h22.365c-3.809,3.913-3.782,10.169,0.091,14.042 c1.953,1.952,4.512,2.929,7.071,2.929c2.56,0,5.118-0.977,7.071-2.929l16.971-16.971C368.988,84.248,368.988,77.916,365.083,74.011 z"/> <path d="M225.747,105.124c1.953,1.952,4.512,2.929,7.071,2.929c2.56,0,5.118-0.977,7.071-2.929 c3.873-3.873,3.899-10.129,0.091-14.042h22.365c5.522,0,10-4.477,10-10c0-5.523-4.478-10-10-10h-22.365 c3.809-3.913,3.782-10.169-0.091-14.042c-3.906-3.904-10.236-3.904-14.143,0l-16.971,16.971c-3.905,3.905-3.905,10.237,0,14.143 L225.747,105.124z"/> <path d="M286.93,95.666c-5.522,0-10,4.477-10,10v22.365c-3.913-3.809-10.168-3.782-14.042,0.091 c-3.905,3.905-3.905,10.237,0,14.143l16.971,16.971c1.953,1.953,4.512,2.929,7.071,2.929c2.56,0,5.118-0.976,7.071-2.929 l16.971-16.971c3.905-3.905,3.905-10.237,0-14.143c-3.874-3.873-10.129-3.9-14.042-0.091v-22.365 C296.93,100.143,292.452,95.666,286.93,95.666z"/> <path d="M276.93,34.133v22.365c0,5.523,4.478,10,10,10c5.522,0,10-4.477,10-10V34.133c1.94,1.889,4.453,2.838,6.971,2.838 c2.56,0,5.118-0.976,7.071-2.929c3.905-3.905,3.905-10.237,0-14.143L294.001,2.929c-3.906-3.905-10.236-3.905-14.142,0 L262.888,19.9c-3.905,3.905-3.905,10.237,0,14.143C266.762,37.915,273.017,37.942,276.93,34.133z"/> <path d="M276.403,184.847c-5.572,0-11.22,1.072-16.508,3.065c-7.351-14.431-22.344-24.338-39.604-24.338 c-6.152,0-12.015,1.166-17.344,3.271c-7.494-14.005-22.274-23.558-39.244-23.558c-4.251,0-8.414,0.594-12.394,1.743 c0.004-4.974,0.008-10.103,0.012-15.225l0.028-39.856c0.008-10.637,0.011-15.562-0.033-18.109h0.043 c0-22.711-19.849-41.188-44.246-41.188c-24.521,0-44.471,19.95-44.471,44.472v135.569c-16.375,5.479-30.83,20.593-31.436,42.169 c-0.949,33.752,1.816,76.462,31.893,107.396c25.391,26.114,65.127,38.809,121.482,38.809c50.684,0,88.169-14.909,111.414-44.311 c16.326-20.651,24.955-48.48,24.955-80.48l-0.078-44.995C320.873,204.797,300.924,184.847,276.403,184.847z M184.582,379.07 c-119.311,0-135.217-60.478-133.383-125.644c0.441-15.717,13.953-25,25-25v28.823c0,3.625,2.514,4.047,3.264,4.047 s3.18-0.412,3.18-4.038c0-3.499,0-182.132,0-182.132c0-13.515,10.955-24.472,24.471-24.472c12.402,0,24.246,8.881,24.246,21.188 c0.008,0.045-0.064,89.86-0.076,111.957c-0.002,0.046-0.014,0.089-0.014,0.135v4.617c0,2.201,1.785,3.985,3.986,3.985 c2.199,0,3.984-1.784,3.984-3.985v-1.194c0.217-13.328,11.082-24.067,24.463-24.067c13.514,0,24.473,10.957,24.473,24.473 l0.018,17.721c0,2.168,1.758,3.925,3.926,3.925c2.166,0,3.924-1.757,3.924-3.925l-0.008-1.014 c0-12.305,11.955-20.894,24.256-20.894c13.516,0,24.422,10.956,24.422,24.472l0.049,17.937c0,2.109,1.709,3.819,3.818,3.819 c2.109,0,3.818-1.71,3.818-3.819l-0.014-1.365c0-11.19,12.109-19.771,24.018-19.771c13.514,0,24.471,10.957,24.471,24.472 l0.078,44.96C300.951,316.094,284.69,379.07,184.582,379.07z"/> </g> </svg>
      Touch and drag to rotate.
    </p>

  </div>


  <script>

  window.addEventListener('load', function() {
      var path = {
        obj: '<?php echo $atts['obj'] ?>',
        mtl: '<?php echo $atts['mtl'] ?>'
      };

      var id = '<?php echo $atts['id'] ?>';
      
      var camera = {};
      <?php if(isset($atts['fov'])) {?>
        camera.fov = Number(<?php echo $atts['fov'] ?>);
      <?php }?>
      <?php if(isset($atts['position'])) {?>  // camera position vector e.g:(10 0 300)
        var position = '<?php echo $atts['position'] ?>'.split(' ');
        camera.x = Number(position[0]);
        camera.y = Number(position[1]);
        camera.z = Number(position[2]);
      <?php }?>

      var rotation = {};
      <?php if(isset($atts['rotation'])) {?>  // object rotation vector e.g:(10 0 300)
        var r = '<?php echo $atts['rotation'] ?>'.split(' ');
        rotation.x = Number(r[0]);
        rotation.y = Number(r[1]);
        rotation.z = Number(r[2]);
      <?php }?>
      
      var bgColor;
      <?php if(isset($atts['bg-color'])) {?>
        bgColor = '<?php echo $atts['bg-color'] ?>';
      <?php }?>

      var ambient = {};  // ambient light color and intensity e.g:(#ffffff 0.5)
      <?php if(isset($atts['ambient-light'])) {?>
        var aLight = '<?php echo $atts['ambient-light'] ?>'.split(' ');
        ambient.color = aLight[0];
        ambient.intensity = Number(aLight[1]);
      <?php }?>
      
      var directional = {};  // directional light color and intensity e.g:(#ffffff 0.5)
      <?php if(isset($atts['directional-light'])) {?>
        var dLight = '<?php echo $atts['directional-light'] ?>'.split(' ');
        directional.color = dLight[0];
        directional.intensity = Number(dLight[1]);
      <?php }?>

      var disableAutoRotate = false;
      <?php if(isset($atts['disable-auto-rotate'])) {?>
        disableAutoRotate = true;
      <?php }?>
      
      new OBJ_MTL_Viewer({path: path, id: id, camera: camera, backgroundColor: bgColor, ambientLight: ambient, directionalLight: directional, disableAutoRotate: disableAutoRotate, rotation: rotation});
    }, false);

  </script>


<?php } ?>