<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="manifest" href="manifest.json">
    
    <link rel="apple-touch-startup-image" href="icon.png">
    <link rel="apple-touch-icon" sizes="152x152" href="152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="180.png">
    <title>Training plan</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .day {
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            background-color: #f9f9f9;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .toggle-button {
            background-color: #333;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
            margin-bottom: 10px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .toggle-button:hover {
            background-color: #555;
        }

        .exercise-list {
            overflow: hidden;
            list-style-type: none;
            margin: auto;
            max-height: 0;
            padding: 0;
            transition: max-height 0.5s ease;
        }

        .exercise-list.active {
            max-height: 0px; /* Укажите здесь достаточно большое значение */
        }

        .exercise-list li {
            margin-bottom: 5px;
            padding: 8px;
            background-color: #ffffff;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .exercise-list li:hover {
            background-color: #f0f0f0;
        }



    </style>
</head>
<body>

<div class="container">
    <h1>Training plan</h1>
    
    <div class="day" id="day1">
        <h2>day 1</h2>

        <button class="toggle-button" onclick="toggleList('back')">back</button>
        <ul class="exercise-list" id="back">
            <li title="Разминка - подтягивания">Warm-up pull-ups</li>
            <li title="Тяга верхнего блока">Thrust of the upper block</li>
            <li title="Тяга горизонтального блока">Thrust of the horizontal block</li>
            <li title="Тяга штанги в наклоне">Thrust barbell in slope</li>
            <li title="Гиперэкстензия">Hyperextension</li>
        </ul>

        <button class="toggle-button" onclick="toggleList('biceps')">biceps</button>
        <ul class="exercise-list" id="biceps">
            <li title="Подъем штанги">Lift the barbell</li>
            <li title="Молот">Hammer</li>
            <li title="Подъем гантелей до отказа">Lift the dumbbells to the limit</li>
        </ul>

        <button class="toggle-button" onclick="toggleList('forearm')">forearm</button>
        <ul class="exercise-list" id="forearm">
            <li title="Подъем штанги на предплечья">Lift the barbell on the forearm</li>
            <li title="Подъем гантелей на предплечья">Lift the dumbbell on the forearm</li>
        </ul>
    </div>

      
    <div class="day" id="day2">
        <h2>day 2</h2>

        <button class="toggle-button" onclick="toggleList('legs')">legs</button>
        <ul class="exercise-list" id="legs">
            <li title="Приседания разминка">Warm-up Squats</li>
            <li title="Разгибание ног в тренажере">Leg extension in the simulator</li>
            <li title="Разгибание ног на квадрицепс">Leg extension to the quadriceps</li>
            <li title="Подъем сидя на икры">Lift while sitting on the calves</li>
        </ul>

        <button class="toggle-button" onclick="toggleList('abs')">abs</button>
        <ul class="exercise-list" id="abs">
            <li title="Пресс на турнике">Abs on the horizontal bar</li>
            <li title="Пресс лежа на наклонной скамье">Abs on the inclined bench</li>
        </ul>

        <button class="toggle-button" onclick="toggleList('upper arm')">upper arm</button>
        <ul class="exercise-list" id="upper arm">
            <li title="Подъем гантелей перед собой">Lifting dumbbells in front of you</li>
            <li title="Жим от плеч">Upper arm press</li>
            <li title="Тяга штанги к подбородку">The pull of the barbell to the chin</li>
            <li title="Жим гантелей сидя над головой">Dumbbell press over the head</li>
        </ul>
    </div>

    <div class="day" id="day3">
        <h2>day 3</h2>

        <button class="toggle-button" onclick="toggleList('pectoral muscles')">pectoral muscles</button>
        <ul class="exercise-list" id="pectoral muscles">
            <li title="Брусья разминка">Warm-up push-ups on the uneven bars</li>
            <li title="Жим лежа">Bench press</li>
            <li title="Сведение рук на тренажере">Bring hands together on the simulator</li>
            <li title="Сведение рук на скамье с гантелями">Bring hands together with dumbbells</li>
        </ul>

        <button class="toggle-button" onclick="toggleList('triceps')">triceps</button>
        <ul class="exercise-list" id="triceps">
            <li title="Отжимания разминка">Warm-up Push-ups</li>
            <li title="Разгибания рук с гантелей из-за головы">Stretch arms with dumbbells from behind the head</li>
            <li title="Тяга канатного блока">Thrust of the rope block</li>
        </ul>

        <button class="toggle-button" onclick="toggleList('forearm1')">forearm</button>
        <ul class="exercise-list" id="forearm1">
            <li title="Подъем штанги на предплечья">Lift the barbell on the forearm</li>
            <li title="Подъем гантелей на предплечья">Lift the dumbbell on the forearm</li>
        </ul>

    </div>


</div>

<script>
    var listItems = document.querySelectorAll('.exercise-list li');
    listItems.forEach(function(item) {
        item.addEventListener('touchstart', function() {
            var tooltip = this.getAttribute('title');
            alert(tooltip);
        });
    });

    function toggleList(listId) {
    var list = document.getElementById(listId);
    var button = document.querySelector('[onclick="toggleList(\'' + listId + '\')"]');
    
    // Закрытие предыдущего списка
    var allLists = document.querySelectorAll('.exercise-list');
    allLists.forEach(function(item) {
        if (item.id !== listId) {
            item.classList.remove('active');
            item.style.maxHeight = '0';
        }
    });

    if (!list.classList.contains('active')) {
        list.classList.add('active');
        list.style.maxHeight = list.scrollHeight + 'px';
    } else {
        list.classList.remove('active');
        list.style.maxHeight = '0';
    }
}


//////////////////////////////////////////////////////////////////


</script>
</body>
</html>