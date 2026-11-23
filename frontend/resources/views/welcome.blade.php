<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a href="kiya"> ke kiya</a>
    <br>
    <a href="dashboard"> ke bagian dashboard</a>

    @extends('masterlayouts')
    @section('konten')
        <x-ui.card>
        </x-ui.card>
        <x-ui.form type="radio" name="jk" value="pria" label="pria" />
        <x-ui.form type="radio" name="jk" value="wanita" label="wanita" />
        <h1>Keluhan</h1>
        <x-ui.form type="checkbox" name="keluhan" value="nyeri" label="nyeri" />
        <x-ui.form type="checkbox" name="keluhan" value="lemes" label="lemes" />
        <x-ui.form type="checkbox" name="keluhan" value="pusing" label="pusing" />
        <x-ui.form type="checkbox" name="keluhan" value="batuk" label="batuk" />
        <x-ui.form type="checkbox" name="keluhan" value="demam" label="demam" />
        <x-ui.form type="checkbox" name="keluhan" value="tak nafsu" label="tak nafsu" />
        <x-ui.form type="checkbox" name="keluhan" value="malas" label="malas" />
    @endsection
</body>

</html>
