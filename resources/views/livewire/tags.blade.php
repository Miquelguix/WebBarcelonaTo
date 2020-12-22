
<div>
<div class="w-full px-2 text-gray-900">
     <div class="flex p-4">
          <h1 class="text-2xl">
               Etiquetas
          </h1>
     </div>

     <h2 class="px-5 text-center">{{$action}} hashtag</h2>

     @error('name') <span>{{ $message }}</span> @enderror

     <div class="grid max-w-xl grid-cols-8 gap-1 px-1 py-2 mb-5 text-xs">

          <div class="col-span-6">
               <input type="text" class="w-full p-1 border border-gray-400 border-solid rounded-sm md:text-xl" wire:model="name" value="{{$name}}" />
          </div>
          
          @if($action == 'crear')
               <td class="flex justify-end col-span-2 p-2">
                    <button wire:click="crear" type="button" class="p-1 text-xs text-white bg-green-500 rounded hover:bg-green-700 focus:outline-none focus:shadow-outline">Guardar</button>
                    
               </td>
          @else
               <td class="flex justify-end col-span-2 p-2">
                    <button wire:click="crear" type="button" class="p-1 text-xs text-white bg-green-500 rounded hover:bg-green-700 focus:outline-none ocus:shadow-outline">Guardar</button>
                    <button wire:click="resetImput" class="p-1 text-sm text-white bg-red-500 rounded hover:bg-red-700 focus:outline-none focus:shadow-outline">Cancelar</button>
               </td>
          @endif

     </div>
     <div class="flex flex-col justify-center text-xs">
          <table class="mb-4 text-center bg-white rounded shadow-md text-md">
               <tbody>

                    <tr class="text-white bg-gray-800 rounded-t-xl">
                         <th class="p-2">Id</th>
                         <th class="p-2">Nombre</th>
                         <th class="p-2">Slug</th>
                         @isset($item->icon)
                              <th class="p-2">Icono</th>
                              <th class="p-2">body</th>
                         @endisset
                         <th class="p-2">Buttons</th>
                    </tr>

                    @foreach ($items as $item)
                    <tr class="border-b bg-gray-50 hover:bg-orange-100">
                         <td>
                              <p>{{$item->id}}</p>
                         </td>
                         <td>
                              <p>{{$item->name}}</p>
                         </td>
                         <td>
                              <p>{{$item->slug}}</p>
                         </td>
                         @isset($item->icon)
                              <td>
                                   <p>{{$item->icon}}</p><i class="material-icons">{{$item->icon}}</i>
                              </td>
                              <td>
                                   <p>{{$item->body}}</p>
                              </td>
                         @endisset

                         <td class="flex justify-end p-2">
                              <button wire:click="edit({{ $item->id }})" type="button"
                                   class="p-1 mr-3 text-xs text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline">Editar</button>
                              <button wire:click="destroy({{ $item->id }})" class="p-1 text-sm text-white bg-red-500 rounded hover:bg-red-700 focus:outline-none focus:shadow-outline">Eliminar</button>
                         </td>
                    </tr>
                    @endforeach
               </tbody>
          </table>
     </div>
</div>
</div>

