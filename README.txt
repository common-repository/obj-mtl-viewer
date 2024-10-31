=== OBJ-MTL-Viewer ===
Contributors: manojbahuguna
Donate link: 
Tags: 3D Viewer, 3D Renderer, OBJ MTL Viewer
Requires at least: 4.7
Tested up to: 4.7.8
Requires PHP: 5.2
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A wordpress plugin to view 3D OBJ+MTL Models.

== Description ==

This plugin allows viewing 3D models which are in .obj format and have material file in .mtl format. (Both files are required for this plugin to work.)

Shortcode Attributes:
Required Fields: (Plugin won't work without these fields)
  id : Any unique 'String'. This id will be assigned to the HTML div element. e.g: 
  mtl : A string containing valid path to the .mtl material file.
  obj : A string containing valid path to the .obj object file.

Other Fields:
  position: A string that contains three 'space-seperated' numeric values which are  x, y and z position for 'camera'. Default is 200, 200, 300 which gives an isometric view of the model.
  fov: A numberic value defining the field of view of the camera.
  ambient-light: A string containing two 'space-seperated' values, the light color and light intensity. Ambient light is applied to the model from all directions.
  directional-light: A string containing two 'space-seperated' values, the light color and light intensity. Directional light is applied to the model only from the front direction.
  bg-color: String that contains the color value for the background of the renderer. It can be any CSS supported value.


Example Usage : 
[OBJ_MTL_Viewer id="model1" mtl="example.com/model.mtl" obj="example.com/model.obj" bg-color="green" ambient-light="white 0.5" directional-light="#fff 1.2" position="0 400 300" fov="10"]

== Installation ==

1. Install the plugin using given zip file and Activate the plugin.
2. Use the shortcode [OBJ_MTL_Viewer] wherever required with the necessary attributes.

== Frequently asked questions ==

Q. I can't see my model rendered properly or at all even after using all required attributes with valid values.
A. You could to try changing the 'position' and 'fov' attributes in your shortcode.

Q. My models are too light or dark.
A. Experiment with 'ambient-light' and 'directional-light' attributes to change color and intensity of lights used.

Q. My models are tilted/rotated/inverted.
A. You can use 'rotation' shortcode attribute to change the rotation of the model.

Q. I want to change the height/width of the renderer.
A. Use the 'obj_mtl-asset-renderer' class in the stylesheet to change the width/height of the renderer.