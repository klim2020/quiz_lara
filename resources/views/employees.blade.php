<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">




</head>
<body>
<div class="container">

    <blockquote>
        <h5>Форма для хуйни</h5>
    </blockquote>
    <div class="baseline"></div>


    <div class="row">




        <div class="input-field col s6 m12">
            <input placeholder="Placeholder" id="first_name" type="text" class="validate">
            <label for="first_name">First Name</label>
        </div>

        <a class="waves-effect waves-light btn"><i class="material-icons left">cloud</i>Поехали</a>

    </div>
    <div class="divider"></div>
</div>
<table class="highlight stripped container">
    <thead>
    <tr>
        <th>Имя</th>
        <th>Почта</th>
        <th>Отдел</th>
        <th>Должность</th>
        <th>Тип сотрудника</th>
        <th>Зарплата за месяц</th>
    </tr>
    </thead>

    <tbody>
    <tr>
        <td>Alvin</td>
        <td>Eclair</td>
        <td>$0.87</td>
        <td>Alvin</td>
        <td>Eclair</td>
        <td>$0.87</td>
    </tr>

    @foreach ($arr as $vall)
        <tr>
        <td>{{$vall->name}}</td>
        <td>{{$vall->email}}</td>
        <td>{{$vall->department}}</td>
        <td>{{$vall->position}}</td>
        <td>
            @if ($vall->paytype === 1)
               почасово
            @else
                помесячно
            @endif
        </td>
        <td>@if ($vall->paytype === 1)
                {{$vall->value*168}}
            @else
                {{$vall->value}}
            @endif
        </td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
