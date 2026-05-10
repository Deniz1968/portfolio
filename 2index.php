<?php
$questions = [
    [
        "question" => "What time do you get up?",
        "options" => ["At 7 o’clock", "In the kitchen", "Because I’m tired", "With my brother"]
    ],
    [
        "question" => "Where do you live?",
        "options" => ["In Ankara", "At school", "On Monday", "Very fast"]
    ],
    [
        "question" => "What is your favorite food?",
        "options" => ["Pizza", "Blue", "Morning", "Teacher"]
    ],
    [
        "question" => "How old are you?",
        "options" => ["I am 15 years old", "I am happy", "I live in Türkiye", "I like football"]
    ],
    [
        "question" => "What do you do after school?",
        "options" => ["I do my homework", "At five o’clock", "In the park", "Because I’m hungry"]
    ],
    [
        "question" => "Which day comes after Monday?",
        "options" => ["Tuesday", "Friday", "Sunday", "Saturday"]
    ],
    [
        "question" => "What is the weather like today?",
        "options" => ["It is sunny", "At home", "With my friend", "At 9 o’clock"]
    ],
    [
        "question" => "Can you swim?",
        "options" => ["Yes, I can", "No, I’m not", "In the sea", "Very good"]
    ],
    [
        "question" => "What does your father do?",
        "options" => ["He is a doctor", "He likes tea", "He is tall", "He is at home"]
    ],
    [
        "question" => "How do you go to school?",
        "options" => ["By bus", "At 8 o’clock", "In the classroom", "With my teacher"]
    ],
    [
        "question" => "What color is your bag?",
        "options" => ["It is black", "It is big", "It is new", "It is mine"]
    ],
    [
        "question" => "Do you like music?",
        "options" => ["Yes, I do", "No, I can’t", "At school", "Every day"]
    ],
    [
        "question" => "What is your mother’s name?",
        "options" => ["Her name is Ayşe", "She is kind", "She is at work", "She likes coffee"]
    ],
    [
        "question" => "Where is the cat?",
        "options" => ["Under the table", "Very small", "At 3 o’clock", "Because it is hungry"]
    ],
    [
        "question" => "What are you doing now?",
        "options" => ["I am studying English", "I am a student", "I am from Türkiye", "I am 14"]
    ],
    [
        "question" => "Which season is very cold?",
        "options" => ["Winter", "Summer", "Spring", "Autumn"]
    ],
    [
        "question" => "What do you drink for breakfast?",
        "options" => ["Milk", "Rice", "Chicken", "Soup"]
    ],
    [
        "question" => "How many brothers do you have?",
        "options" => ["Two", "Blue", "Teacher", "Library"]
    ],
    [
        "question" => "What is your favorite sport?",
        "options" => ["Football", "Teacher", "Hospital", "Monday"]
    ],
    [
        "question" => "When do you go to bed?",
        "options" => ["At 10 o’clock", "In my room", "With my sister", "Because I’m tired"]
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Başkent Ekranı</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            background: white;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }

        .question {
            font-weight: bold;
            margin-bottom: 10px;
        }

        label {
            display: block;
            margin: 5px 0;
        }

        button {
            padding: 10px 20px;
            background: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>

<h1>Başkent Ekranı</h1>

<?php foreach ($questions as $index => $q): ?>
    <form method="post">
        <div class="question">
            <?php echo ($index + 1) . ". " . $q['question']; ?>
        </div>

        <?php foreach ($q['options'] as $option): ?>
            <label>
                <input type="radio" name="question_<?php echo $index; ?>" value="<?php echo $option; ?>">
                <?php echo $option; ?>
            </label>
        <?php endforeach; ?>

        <br>
        <button type="submit">Submit</button>
    </form>
<?php endforeach; ?>

</body>
</html>