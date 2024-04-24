<!-- Date Picker-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>


<div class="myContainer mt-16 text-center">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table id="POITable" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nom
                </th>
                <th scope="col" class="px-6 py-3">
                    Période de Garantie
                </th>
                <th scope="col" class="px-6 py-3">
                    Nature du Lot technique 
                </th>
                <th scope="col" class="px-6 py-3">
                    RCD
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <form class="max-w-sm mx-auto" action="">
        <tbody>
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="floating_first_name" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nom</label>
                    </div>
                </th>
                <td class="px-6 py-4">
                    <h4>Début</h4>
                    <div class="relative max-w-sm">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </div>
                        <input datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                    </div>
                    <h4>Fin</h4>
                    <div class="relative max-w-sm">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </div>
                        <input datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                    </div>
                </td>
                <td class="px-6 py-4">
                    <select id="lot-tech" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    onchange="document.getElementById('trash-action-libelle').value=this.options[this.value].text;" >
                        <option selected>-- Lot technique --</option>
                            <option value='1'>BET</option>
                            <option value='2'>Ingénieur conseil</option>
                            <option value='3'>Maçonnerie</option>
                            <option value='4'>Enduit</option>
                            <option value='5'>Charpente bois</option>
                            <option value='6'>Charpente métallique</option>
                            <option value='7'>Couverture / étanchéité</option>
                            <option value='8'>Plomberie</option>
                            <option value='9'>Carrelage</option>
                            <option value='10'>Menuiseries</option>
                            <option value='11'>Plaques de plâtres</option>
                            <option value='12'>Revêtements souples sols murs</option>
                            <option value='13'>Électricité</option>
                            <option value='14'>Fondation</option>
                            <option value='15'>Terrassement</option>
                    </select>
                </td>
                <td class="px-6 py-4">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">

                    <button type="submit" class="text-white flex bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v9m-5 0H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-2M8 9l4-5 4 5m1 8h.01"/>
                        </svg>
                        Transférer
                    </button>
                </td>
                <td class="px-6 py-4">
                    <!-- DELETE ROW -->
                    
                    <a id="trash-action" href="#" attr="bois" data-modal-target="popup-modal" data-modal-toggle="popup-modal" onClick="document.getElementById('lot-del').innerHTML=document.getElementById('trash-action-libelle').value;globalrow=this;" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                        <input type="text" id="trash-action-libelle" value="bois">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                        </svg>
                    </a>
                </td>
            </tr>             
        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="floating_first_name" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nom</label>
                    </div>
                </th>
                <td class="px-6 py-4">
                    <h4>Début</h4>
                    <div class="relative max-w-sm">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </div>
                        <input value="20-04-2022" datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                    </div>
                    <h4>Fin</h4>
                    <div class="relative max-w-sm">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </div>
                        <input value="01-05-2032" datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                    </div>
                </td>
                <td class="px-6 py-4">
                    <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>-- Lot technique --</option>
                            <option value='1'>BET</option>
                            <option value='2'>Ingénieur conseil</option>
                            <option value='3'>Maçonnerie</option>
                            <option value='4'>Enduit</option>
                            <option value='5' selected>Charpente bois</option>
                            <option value='6'>Charpente métallique</option>
                            <option value='7'>Couverture / étanchéité</option>
                            <option value='8'>Plomberie</option>
                            <option value='9'>Carrelage</option>
                            <option value='10'>Menuiseries</option>
                            <option value='11'>Plaques de plâtres</option>
                            <option value='12'>Revêtements souples sols murs</option>
                            <option value='13'>Électricité</option>
                            <option value='14'>Fondation</option>
                            <option value='15'>Terrassement</option>
                    </select>
                </td>
                <td class="px-6 py-4">
                    <a class="flex"  href="">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 17v-5h1.5a1.5 1.5 0 1 1 0 3H5m12 2v-5h2m-2 3h2M5 10V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1v6M5 19v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-1M10 3v4a1 1 0 0 1-1 1H5m6 4v5h1.375A1.627 1.627 0 0 0 14 15.375v-1.75A1.627 1.627 0 0 0 12.375 12H11Z"/>
                        </svg> rcd-456451.pdf
                    </a>    

                </td>
                <td class="px-6 py-4">
                    <!-- DELETE ROW -->
                    <a href="#" onClick="deleteRow(this)" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                        </svg>
                    </a>
                </td>
            </tr>            
                    
        </tbody>
        </form>
    </table>
    <button onclick="insRow()" type="button" class="text-white flex bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
        <svg class="w-[37px] h-[37px] text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9V4a1 1 0 0 0-1-1H8.914a1 1 0 0 0-.707.293L4.293 7.207A1 1 0 0 0 4 7.914V20a1 1 0 0 0 1 1h4M9 3v4a1 1 0 0 1-1 1H4m11 6v4m-2-2h4m3 0a5 5 0 1 1-10 0 5 5 0 0 1 10 0Z"/>
        </svg>
        Ajouter un Lot technique
    </button>
</div>



    <p class="flex items-center text-sm text-gray-500 dark:text-gray-400">A compléter obligatoirement <button data-popover-target="popover-description" data-popover-placement="bottom-end" type="button"><svg class="w-4 h-4 ms-2 text-gray-400 hover:text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg><span class="sr-only">Show information</span></button></p>
    <div data-popover id="popover-description" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
        A compléter obligatoirement en cas d'absence de liste complète fournie par le souscripteur.
        A Vérifier la présence des éléments (coordonnées assureur, n° de contrat, coordonnées de l'assuré, période de validité), et en particulier : 
        <ul>
            <li> que l'attestation concerne bien la garantie responsabilité décennale, </li>
            <li> que la date d'ouverture de chantier (DOC) est bien incluse dans la période de garantie du contrat RCD indiquée sur l'attestation, </li>
            <li> que l'activité mentionnée sur l'attestation correspond au lot technique réalisé par le constructeur. </li>
        </ul>
        <br/>
        <strong>Attention : Est irrecevable :</strong> 
        <ul>
            <li>l'attestation à l'en-tête de l'apporteur et non de l'assureur</li>
            <li>l'attestation visant une garantie autre que la garantie responsabilité décennale</li>
        </ul>
    </div> 


    <fieldset class="flex md:grid-cols-2 md:gap-6 border-2 border-gray-400 p-4 m-6">
        <legend>Fichiers ajoutés</legend>
        <span class="flex items-center text-sm font-medium text-gray-900 dark:text-white me-3"><span class="flex w-2.5 h-2.5 bg-blue-600 rounded-full me-1.5 flex-shrink-0"></span>     Ajout récent</span>
        <span class="flex items-center text-sm font-medium text-gray-900 dark:text-white me-3"><span class="flex w-2.5 h-2.5 bg-green-500 rounded-full me-1.5 flex-shrink-0"></span>    Validé</span>
        <span class="flex items-center text-sm font-medium text-gray-900 dark:text-white me-3"><span class="flex w-2.5 h-2.5 bg-red-500 rounded-full me-1.5 flex-shrink-0"></span>      Refusé</span>
    </fieldset>


    <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Suppression</span>
            </button>
            <div class="p-4 md:p-5 text-center">
                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Etes vous sûr de vouloir supprimer le lot technique "<span id="lot-del"></span>" ?</h3>
                <button data-modal-hide="popup-modal" onclick="console.log(globalrow);deleteRow(globalrow)" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                    Oui je suis sûr
                </button>
                <button data-modal-hide="popup-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancel</button>
            </div>
        </div>
    </div>
</div>

</div>

<script>
function deleteRow(row) {
  var i = row.parentNode.parentNode.rowIndex;
  document.getElementById('POITable').deleteRow(i);
}


function insRow() {
  console.log('hi');
  var x = document.getElementById('POITable');
  console.log(x);
  var new_row = x.rows[1].cloneNode(true);
  

  x.appendChild(new_row);
}
</script>