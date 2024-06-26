<?php
/* Smarty version 4.5.1, created on 2024-03-28 22:19:45
  from 'C:\Codes\2024-03-28 - SmartIBGENames\app\views\site\components\animation\animation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6605ed0120f6e0_50092414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '537a8763101199b3c57918cc067c042ac1753d59' => 
    array (
      0 => 'C:\\Codes\\2024-03-28 - SmartIBGENames\\app\\views\\site\\components\\animation\\animation.tpl',
      1 => 1711664260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6605ed0120f6e0_50092414 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="importmap">
  {
    "imports": {
      "three": "https://cdn.jsdelivr.net/npm/three@0.150.0/build/three.module.js",
      "addons/": "https://cdn.jsdelivr.net/npm/three@0.150.0/examples/jsm/"
    }
  }
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="module">
  import {
    BufferAttribute,
    Clock,
    Color,
    PerspectiveCamera,
    PlaneGeometry,
    Points,
    Scene,
    ShaderMaterial,
    WebGLRenderer,
  } from "three";

  /**
  |--------------------------------------------------
  | Constants
  |--------------------------------------------------
  */
  const sizes = {
    width: window.innerWidth,
    height: window.innerHeight,
  };
  const canvas = document.querySelector("canvas.webgl");
  const scene = new Scene();

  /**
  |--------------------------------------------------
  | Camera
  |--------------------------------------------------
  */
  const camera = new PerspectiveCamera(
    75,
    sizes.width / sizes.height,
    0.1,
    100
  );
  camera.position.z = 10;
  camera.position.y = 1.1;
  camera.position.x = 0;
  scene.add(camera);

  /**
  |--------------------------------------------------
  | Plane
  |--------------------------------------------------
  */
  const planeGeometry = new PlaneGeometry(20, 20, 150, 150);
  const planeMaterial = new ShaderMaterial({
    uniforms: {
      uTime: { value: 0 },
      uElevation: { value: 0.482 },
    },
    vertexShader: `
          uniform float uTime;
          uniform float uElevation;

          attribute float aSize;

          varying float vPositionY;
          varying float vPositionZ;

          void main() {
              vec4 modelPosition = modelMatrix * vec4(position, 1.0);
              modelPosition.y = sin(modelPosition.x - uTime) * sin(modelPosition.z * 0.6 + uTime) * uElevation;

              vec4 viewPosition = viewMatrix * modelPosition;
              gl_Position = projectionMatrix * viewPosition;

              gl_PointSize = 2.0 * aSize;
              gl_PointSize *= ( 1.0 / - viewPosition.z );

              vPositionY = modelPosition.y;
              vPositionZ = modelPosition.z;
          }
      `,
    fragmentShader: `
          varying float vPositionY;
          varying float vPositionZ;

          void main() {
              float strength = (vPositionY + 0.25) * 0.3;
              gl_FragColor = vec4(1.0, 1.0, 1.0, strength);
          }
      `,
    transparent: true,
  });
  const planeSizesArray = new Float32Array(
    planeGeometry.attributes.position.count
  );
  for (let i = 0; i < planeSizesArray.length; i++) {
    planeSizesArray[i] = Math.random() * 4.0;
  }
  planeGeometry.setAttribute("aSize", new BufferAttribute(planeSizesArray, 1));

  const plane = new Points(planeGeometry, planeMaterial);
  plane.rotation.x = -Math.PI * 0.4;
  scene.add(plane);

  /**
  |--------------------------------------------------
  | Resize
  |--------------------------------------------------
  */
  window.addEventListener("resize", () => {
    // Update sizes
    sizes.width = window.innerWidth;
    sizes.height = window.innerHeight;

    // Update camera
    camera.aspect = sizes.width / sizes.height;
    camera.updateProjectionMatrix();

    // Update renderer
    renderer.setSize(sizes.width, sizes.height);
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
  });

  /**
  |--------------------------------------------------
  | Renderer
  |--------------------------------------------------
  */
  const renderer = new WebGLRenderer({
    canvas: canvas,
  });
  renderer.setSize(sizes.width, sizes.height);
  renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

  /**
  |--------------------------------------------------
  | Animate Function
  |--------------------------------------------------
  */
  const clock = new Clock();

  const animate = () => {
    const elapsedTime = clock.getElapsedTime();

    planeMaterial.uniforms.uTime.value = elapsedTime;

    renderer.render(scene, camera);

    // Call animate again on the next frame
    window.requestAnimationFrame(animate);
  };

  animate();
<?php echo '</script'; ?>
>

<?php }
}
