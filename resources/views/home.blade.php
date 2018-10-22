@extends('layouts.app')

@section('content')
<div class=" h-100">
            <div class="row h-100">
                <aside id="left-sidebar" class="col-12 col-md-2 p-0 mt-5 bg-dark fixed-top h-100">
                    <nav class="navbar navbar-expand navbar-dark bg-dark flex-md-column flex-row align-items-start py-2">
                        <div class="collapse navbar-collapse align-items-start">
                            <ul class="flex-md-column flex-row navbar-nav w-100 justify-content-between">
                                <li class="nav-item button_ref">
                                    
                                </li>
  


                                                
                            </ul>
                        </div>
                    </nav>
                </aside>
                <main class="col offset-md-2 bg-faded py-3">
                <h1 class="text-center">Список об'єктів ТОВ "Флоріан-Т"</h1>
                    <div class="float-right block-a">
                        <a href="/object/add" class="text-secondary"><i class="fas fa-plus-square"></i></a>
                        <a href="#" class="text-secondary"><i class="fas fa-print "></i></a>
                    </div>
                <table id="grid" border="1" width="100%">
                    <thead>
                        <tr>
                            <th data-type="number">№</th>
                            <th data-type="string">Назва об'єкту</th>
                            <th data-type="string">Адреса об'єкту</th>
                            <th data-type="string">Район</th>
                            <th data-type="number">Відповідальний</th>
                            <th data-type="number">Дата останнього обслуговування</th>
                            <th data-type="string">Проведено роботи</th>
                            <th>Дії з об'єктом</th>
                        </tr>
                    </thead>
                    <tbody> 
                        @foreach($objectFlorians as $objectFlorian)
                        <tr id="z_{{$objectFlorian->id}}">
                                             
                            <td>{{$objectFlorian->id}}</td>
                            <td>{{$objectFlorian->name}}</td>
                            <td>{{$objectFlorian->adress}}</td>
                            <td>{{$objectFlorian->region}}</td>
                            <td>
                                <?php 
                                    $id_vidpov = $objectFlorian->vidpovidalnuy - 1;
                                    echo $users[$id_vidpov]->name;
                                
                                ?>
                         
                            </td>
                            <td>12.10.18</td>
                            <td>ТО 1</td>
                            <td>
                                <a href="/object/view/{{$objectFlorian->id}}"><i class="far fa-eye"></i></a> | 
                                <a href="/object/edit/{{$objectFlorian->id}}"><i class="far fa-edit text-primary"></i></a> |
                                <a href="/object/remove/{{$objectFlorian->id}}"><i class="far fa-trash-alt text-danger"></i></a>
                            </td>
                        </tr>

                        @endforeach    
                    </tbody>
                </table>
                </main>

            </div>    
</div>
<script>
    // сортировка таблицы
    // использовать делегирование!
    // должно быть масштабируемо:
    // код работает без изменений при добавлении новых столбцов и строк

    var grid = document.getElementById('grid');

    grid.onclick = function(e) {
      if (e.target.tagName != 'TH') return;

      // Если TH -- сортируем
      sortGrid(e.target.cellIndex, e.target.getAttribute('data-type'));
    };

    function sortGrid(colNum, type) {
      var tbody = grid.getElementsByTagName('tbody')[0];

      // Составить массив из TR
      var rowsArray = [].slice.call(tbody.rows);

      // определить функцию сравнения, в зависимости от типа
      var compare;

      switch (type) {
        case 'number':
          compare = function(rowA, rowB) {
            return rowA.cells[colNum].innerHTML - rowB.cells[colNum].innerHTML;
          };
          break;
        case 'string':
          compare = function(rowA, rowB) {
            return rowA.cells[colNum].innerHTML > rowB.cells[colNum].innerHTML;
          };
          break;
      }

      // сортировать
      rowsArray.sort(compare);

      // Убрать tbody из большого DOM документа для лучшей производительности
      grid.removeChild(tbody);

      // добавить результат в нужном порядке в TBODY
      // они автоматически будут убраны со старых мест и вставлены в правильном порядке
      for (var i = 0; i < rowsArray.length; i++) {
        tbody.appendChild(rowsArray[i]);
      }

      grid.appendChild(tbody);

    }
  </script>
@endsection
