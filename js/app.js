console.log(currentWords[0].word, currentWords[1].word, currentWords[2].word);

function getTestWord(currentWords){

    var randomNumber = Math.floor(Math.random()* currentWords.length);
    console.log(randomNumber);
    $('#thisForm').append("<h1>"+currentWords[randomNumber].word+"</h1>");
    $('#thisForm').append('<input type="submit" value="click"/>')
}
getTestWord(currentWords);
$('#thisForm').append("<h1>"+currentWords[0].word+"</h1>");
