@extends('layouts.app')

@section('content')
<div class="container" id="app">
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header text-center py-4">Cursos</h1>
        </div>
        <div class="col-md-7">
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#create"><i class="fas fa-plus-circle"></i> Curso</a><br><br>
        </div>
        <div class="col-md-12">
            <table class="table table-hover">
                <tr>
                    <th>ID</th>
                    <th>Nombre Curso</th>
                    <th>Nombre Profesor</th>
                    <th>Capacidad</th>
                    <th>Observaciones</th>
                    <th></th>
                </tr>
                <tr v-for="courses in courses">
                    <td>@{{ courses.id }}</td>
                    <td>@{{ courses.name_course }}</td>
                    <td>@{{ courses.name_teacher }}</td>
                    <td>@{{ courses.capacity }}</td>
                    <td>@{{ courses.observations }}</td>
                    <td>
                        <a href="#" v-on:click.prevent="viewCourse(courses)"><i class="far fa-eye"></i></a>
                    </td>
                </tr>
            </table>
        </div>    
    </div>
    @include('courses.create')
    @include('courses.view')
</div>
@endsection