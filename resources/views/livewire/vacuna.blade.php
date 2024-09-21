<div>

<section class="bg-white py-20 lg:py-[120px] text-" style="margin-top: 100px;margin-right: 40px;">

    <div class="container">
       <div class="flex flex-wrap -mx-4">
          <div class="w-full px-4">
             <div class="max-w-full overflow-x-auto">
                <table class="table-auto w-full">
                   <thead>


                      <tr class="bg-purple-800 text-center">
                         <th
                            class="
                            w-1/6
                            min-w-[160px]
                            text-lg
                            font-semibold
                            text-black
                            py-4
                            lg:py-7
                            px-3
                            lg:px-4
                            border-l border-transparent
                            "
                            >
                            ID_Vacuna
                         </th>
                         <th
                            class="
                            w-1/6
                            min-w-[160px]
                            text-lg
                            font-semibold
                            text-black
                            py-4
                            lg:py-7
                            px-3
                            lg:px-4
                            "
                            >
                            Nombre Vacuna
                         </th>
                         <th
                            class="
                            w-1/6
                            min-w-[160px]
                            text-lg
                            font-semibold
                            text-black
                            py-4
                            lg:py-7
                            px-3
                            lg:px-4
                            "
                            >
                            Descripcion vacuna
                         </th>
                         <th
                            class="
                            w-1/6
                            min-w-[160px]
                            text-lg
                            font-semibold
                            text-black
                            py-4
                            lg:py-7
                            px-3
                            lg:px-4
                            "
                            >
                            Estado
                         </th>
                         <th
                            class="
                            w-1/6
                            min-w-[160px]
                            text-lg
                            font-semibold
                            text-black
                            py-4
                            lg:py-7
                            px-3
                            lg:px-4
                            "
                            >
                            Interaccion
                         </th>

                      </tr>
                   </thead>
                   <tbody>
                    @foreach ($vacunas as $Vacunas)
                    <tr>
                        <tr>
                            <td class="text-center text-dark font-medium text-base py-5 px-2 bg-[#F3F6FF] border-b border-l border-[#E8E8E8]">
                                {{ $Vacunas->Id_vacuna }}
                            </td>

                            </td>
                            <td class="text-center text-dark font-medium text-base py-5 px-2 bg-white border-b border-[#E8E8E8]">
                                {{ $Vacunas->nombre_de_vacuna }}
                            </td>
                            <td class="text-center text-dark font-medium text-base py-5 px-2 bg-[#F3F6FF] border-b border-[#E8E8E8]">
                                {{ $Vacunas->Descripción }}
                            </td>
                            <td class="text-center text-dark font-medium text-base py-5 px-2 bg-white border-b border-[#E8E8E8]">
                                {{ $Vacunas->Estado }}
                            </td>

                            <td class="text-center text-dark font-medium text-base py-5 px-2 bg- border-b border-r border-[#E8E8E8]">
                                <button class="bg-purple-800 text-dark px-4 py-2 rounded-md" >editar</button>
                                <button class="bg-purple-800 text-dark px-4 py-2 rounded-md">eliminar</button>
                            </td>
                        </tr>
                    </tr>
                    @endforeach
                   </tbody>
                </table>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- ====== Table Section End -->

</div>
