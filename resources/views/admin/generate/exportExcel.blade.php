  <table class="w-full whitespace-no-wrap">
                               <thead>
                                   <tr
                                       class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                       <th class="px-4 py-3">Dosen</th>
                                       <th class="px-4 py-3">Jurusan</th>
                                       <th class="px-4 py-3">Mata Kuliah</th>
                                       <th class="px-4 py-3">Ruangan</th>
                                       <th class="px-4 py-3">Hari</th>
                                       <th class="px-4 py-3">Waktu mulai</th>
                                       <th class="px-4 py-3">Waktu selesai</th>
                                       <th class="px-4 py-3">Actions</th>
                                   </tr>
                               </thead>
                               <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                   @foreach ($populations as $population)
                                       <tr class="text-gray-700 dark:text-gray-400">
                                           <td class="px-4 py-3 text-sm">
                                               {{ $population->dosen->nama }}
                                           </td>
                                           <td class="px-4 py-3">
                                               <div>
                                                   <p class="font-semibold">{{ $population->jurusan->nama }}</p>
                                               </div>
                                           </td>
                                           <td class="px-4 py-3 text-sm">
                                               {{ $population->mataKuliah->nama }}
                                           </td>

                                           <td>
                                               @if (isset($population->ruangan->nama) && $population->ruangan->nama)
                                                   {{ $population->ruangan->nama }}
                                               @else
                                                   <span
                                                       class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600">
                                                       Null
                                                   </span>
                                               @endif
                                           </td>
                                           <td>
                                               @if (isset($population->hari) && $population->hari)
                                                   {{ $population->hari }}
                                               @else
                                                   <span
                                                       class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600">
                                                       Null
                                                   </span>
                                               @endif
                                           </td>
                                           <td>
                                               @if (isset($population->waktu_mulai) && $population->waktu_mulai)
                                                   {{ $population->waktu_mulai }}
                                               @else
                                                   <span
                                                       class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600">
                                                       Null
                                                   </span>
                                               @endif
                                           </td>
                                           <td>
                                               @if (isset($population->waktu_selesai) && $population->waktu_selesai)
                                                   {{ $population->waktu_selesai }}
                                               @else
                                                   <span
                                                       class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600">
                                                       Null
                                                   </span>
                                               @endif
                                           </td>
                                           <td class="px-4 py-3">
                                               <div class="flex items-center space-x-4 text-sm">
                                                   <a href="{{ route('edit_population', ['id' => $population->id]) }}"
                                                       class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                       aria-label="Edit">
                                                       <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                           viewBox="0 0 20 20">
                                                           <path
                                                               d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                           </path>
                                                       </svg>
                                                   </a>
                                                   <form
                                                       action="{{ route('hapus_population', ['id' => $population->id]) }}"
                                                       method="post">
                                                       @csrf
                                                       @method('DELETE')
                                                       <button type="submit"
                                                           onclick="confirm('Apakah anda yakin ingin menghapus?')"
                                                           class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                           aria-label="Delete">
                                                           <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                               viewBox="0 0 20 20">
                                                               <path fill-rule="evenodd"
                                                                   d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                                   clip-rule="evenodd"></path>
                                                           </svg>
                                                       </button>
                                                   </form>
                                               </div>
                                           </td>
                                       </tr>
                                   @endforeach
                               </tbody>
                           </table>