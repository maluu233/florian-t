@extends('layouts.app')

@section('content')
<div class=" h-100">
            <div class="row h-100">
                <aside id="left-sidebar" class="col-12 col-md-2 p-0 mt-5 bg-dark fixed-top h-100">
                    <nav class="navbar navbar-expand navbar-dark bg-dark flex-md-column flex-row align-items-start py-2">
                        <div class="collapse navbar-collapse align-items-start">
                            <ul class="flex-md-column flex-row navbar-nav w-100 justify-content-between">
                                <li class="nav-item">
                                    <label class="nav-link pl-0 mb-0 text-nowrap" for="">Виберіть об'єкт</label>
                                    <input class="w-100" type="text" name="object" id="object" list="object_list">
                                    <datalist id="object_list">
                                        <option>Усі</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </datalist>
                                </li> 
                                <li class="nav-item">
                                    <label class="nav-link pl-0 mb-0 text-nowrap" for="">Виберіть район</label>
                                    <input class="w-100" type="text" name="region" id="region" list="region_list">
                                    <datalist id="region_list">
                                        <option>Усі</option>
                                        <option>Вишенька</option>
                                        <option>Київська</option>
                                        <option>Коцюбинського</option>
                                    </datalist>
                                </li>   
                                <li class="nav-item">
                                    <label class="nav-link pl-0 mb-0 text-nowrap" for="">Виберіть відповідального</label>
                                    <input class="w-100" type="text" name="ingener" id="ingener" list="ingener_list">
                                    <datalist id="ingener_list">
                                        <option>Усі</option>
                                        <option>Кравець</option>
                                        <option>Семикрас</option>
                                        <option>Лісовик</option>
                                    </datalist>
                                </li> 
                                <li class="nav-item">
                                    <label class="nav-link pl-0  text-nowrap" for=""><a href="#">Список об'єктів</a></label>
                                </li>


                                                
                            </ul>
                        </div>
                    </nav>
                </aside>
                <main class="col offset-md-2 bg-faded py-3">
                <h1>home</h1>
                </main>

            </div>    
</div>
@endsection
