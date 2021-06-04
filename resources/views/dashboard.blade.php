<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab</title>
</head>
<body>
    @include('layouts.nav')
    <h1>Dashboard</h1>
    @can('admin')
        <h1>Hola soy el admin</h1>
    @endcan 
    @can('doctor')
        <h1>Hola soy el doctor</h1>
    @endcan 
    @can('patient')
        <h1>Hola soy el paciente</h1>
    @endcan 
</body>
</html>