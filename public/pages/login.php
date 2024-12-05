<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login of Nike</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body class="bg-black text-gray-800">

<section class="w-full h-screen flex relative overflow-hidden">

  <spline-viewer 
    url="https://prod.spline.design/CyYSnTd8RbNtsfQq/scene.splinecode" 
    class="h-screen w-full">
  </spline-viewer>


  <div class="w-[350px] h-screen bg-black absolute right-0 top-0 z-50 p-6 shadow-lg">
    <form action="" method="" class="flex flex-col h-full space-y-6 justify-center items-center">

      <h2 class="text-3xl font-extrabold text-red-500 underline decoration-red-200 uppercase">Iniciar sesión</h2>
      

      <div class="w-full">
        <label for="name" class="block text-sm font-medium text-red-400 mb-1">Nombre de usuario:</label>
        <input 
          type="text" 
          placeholder="Nombre de usuario" 
          class="w-full p-3 border border-gray-600 rounded bg-black text-gray-200 focus:outline-none focus:ring focus:ring-red-500">
      </div>


      <div class="w-full">
        <label for="password" class="block text-sm font-medium text-red-400 mb-1">Contraseña:</label>
        <input 
          type="password" 
          placeholder="Contraseña" 
          class="w-full p-3 border border-gray-600 rounded bg-black text-gray-200 focus:outline-none focus:ring focus:ring-red-500">
      </div>

        <a href="/proyecto/public/pages/productosadmin.php" class="w-full bg-red-600 text-white py-3 rounded-lg hover:bg-red-700 transition-all border border-gray-900 text-center" >
        Iniciar sesión</a>
    </form>
  </div>
</section>

<script type="module" src="https://unpkg.com/@splinetool/viewer@1.9.46/build/spline-viewer.js"></script>
</body>
</html>
