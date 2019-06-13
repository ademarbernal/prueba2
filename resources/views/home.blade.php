@extends('layouts.app')

@section('content')

<div class="header">
     

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
          <h1 class="navbar-brand" href="">ADOPCION DE MASCOTAS E INFORMACION DE MASCOTAS EXTRAVIADAS</h1>
            @if (auth()->check())

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="#">Usuario<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                               
                                <li>
                                    <a href="#}"><i class='fa fa-list-ol fa-fw'></i> Usuarios</a>
                                </li>
                            </ul>
                        </li>
                   
                        <li>
                            <a href="#">mascotas en adopcion<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/genero/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar mascota</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/genero')!!}"><i class='fa fa-list-ol fa-fw'></i> mascotas</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#"> mascotas extraviadas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/mascotasext/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar mascotas extraviadas</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/mascotasext')!!}"><i class='fa fa-list-ol fa-fw'></i> mascotas extraviadas</a>
                                </li>
                            </ul>
                        </li> 
                        <li>
                            <a href="#"> adopciones<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class='fa fa-plus fa-fw'></i> Agregar adopcion</a>
                                </li>
                                <li>
                                    <a href="#"><i class='fa fa-list-ol fa-fw'></i> registros de adopciones</a>
                                </li>
                            </ul>
                        </li>
                         <li>
                            <a href="#"> reportes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class='fa fa-list-ol fa-fw'></i> reportes de adopcion</a>
                                </li>
                                <li>
                                    <a href="#"><i class='fa fa-list-ol fa-fw'></i> reportes de mascotas extraviadas</a>
                                </li>
                            </ul>
                        </li>
                       
                        <li>
                            <a href="#"> requisitos de mascotas pequeñas <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/requisitospeq/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar requisitos </a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/requisitospeq')!!}"><i class='fa fa-list-ol fa-fw'></i> requisitos de mascotas pequeñas </a>
                                </li>
                            </ul>
                        </li> 
                         <li>
                            <a href="#"> requisitos de mascotas medianas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/requisitos/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar requisitos </a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/requisitos')!!}"><i class='fa fa-list-ol fa-fw'></i> requisitos de mascotas medianas</a>
                                </li>
                            </ul>
                        </li> 
                          <li>
                            <a href="#"> requisitos de mascotas grandes <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/requisitosgra/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar requisitos </a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/requisitosgra')!!}"><i class='fa fa-list-ol fa-fw'></i> requisitos de mascotas grandes </a>
                                </li>
                            </ul>
                        </li> 
                    </ul>
                </div>
            </div>

     </nav>

<audio autoplay><source src="sounds/perrofeliz.mp3" type="audio/mp3"></audio>
            @else
            
            @endif 
     
@endsection
