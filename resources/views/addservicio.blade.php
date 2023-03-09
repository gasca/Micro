 <x-layouts.app
    title="Agregar Articulos o Servicios"
    meta-description="Sitio de ventas para Internet La Central"
 >
    <x-layouts.navciber></x-layouts.navciber>
	
		<form class="bg-blue-400 md:w-5/6 mx-auto grid grid-flow-row auto-rows-max">
			<div class="bg-orange-100 mx-10 mt-3 w-10/12">
				<label 
				class="block mb-2 text-sm font-medium"	
				for="articulo">
						Articulo o Servicio
				</label>
				<input 
				class="w-10/12 shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 dark:shadow-sm-light"
				type="text" placeholder="Descripción de Articulo o Servicio">
			</div>
		<div class="bg-orange-100 mx-10 mt-3 w-10/12">
				<label 
				class="block mb-2 text-sm font-medium"	
				for="Precio Unitario">
						Precio Unitario
				</label>
				<input 
				class="w-30 shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 dark:shadow-sm-light"
				type="text" placeholder="Precio Unitario">

			</div>
			<div class="bg-orange-100 mx-10 mt-3 w-10/12">
				<label 
				class="block mb-2 text-sm font-medium"	
				for="articulo">
						Precio Proveedor
				</label>
				<input 
				class="w-30 shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 dark:shadow-sm-light"
				type="text" placeholder="Precio Proveedor">
			</div>
					
               <div class="bg-orange-100 mx-10 mt-3 w-10/12">

						<button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
						Guardar

					</button>
			</div>


		</form>

 </x-layouts.app>
