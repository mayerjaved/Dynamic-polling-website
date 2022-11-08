
/*
var PollForm = document.getElementById("createPoll");
PollForm.addEventListener("input", verifySubmission, false);

function CreateForm(event){
    var poll_input = document.getElementById("poll_input");
    var count_1 = document.getElementById("count_1");
    const count_limit_1 = poll_input.value.length;
    count_1.innerText = count_limit_1
}
*/



var poll_input = document.getElementById("poll_input");
var count_0 = document.getElementById("count_0");

var q_1 = document.getElementById("q_1");
var count_1 = document.getElementById("count_1");

var q_2 = document.getElementById("q_2");
var count_2 = document.getElementById("count_2");

var q_3 = document.getElementById("q_3");
var count_3 = document.getElementById("count_3");

var q_4 = document.getElementById("q_4");
var count_4 = document.getElementById("count_4");

var q_5 = document.getElementById("q_5");
var count_5 = document.getElementById("count_5");

var endDate = document.getElementById("endDate");
var end_valid = document.getElementById("end_valid");

var startDate = document.getElementById("startDate");
var start_valid = document.getElementById("start_valid");

poll_input.addEventListener("input", (e) => {
    const count_limit_0 = 100 - e.target.value.length;
    count_0.innerText = "Character limit left is: " + count_limit_0
})

q_1.addEventListener("input", (e) => {
    const count_limit_1 = 50 - e.target.value.length;
    count_1.innerText = "Character limit left is: " + count_limit_1
})

q_2.addEventListener("input", (e) => {
    const count_limit_2 = 50 - e.target.value.length;
    count_2.innerText = "Character limit left is: " + count_limit_2
})

q_3.addEventListener("input", (e) => {
    const count_limit_3 = 50 - e.target.value.length;
    count_3.innerText = "Character limit left is: " + count_limit_3
})

q_4.addEventListener("input", (e) => {
    const count_limit_4 = 50 - e.target.value.length;
    count_4.innerText = "Character limit left is: " + count_limit_4
})

q_5.addEventListener("input", (e) => {
    const count_limit_5 = 50 - e.target.value.length;
    count_5.innerText = "Character limit left is: " + count_limit_5
})



endDate.addEventListener("input", (e) => {
  
    var parts = e.target.value.split("-")
    var day = parseInt(parts[2], 10)
    var month = parseInt(parts[1], 10)
    var year = parseInt(parts[0], 10)
    //end_valid.innerText = "Valid Data format"

    if(year > 2000 && year < 2100 && month != 0 && month < 12 && day != 0 && day < 32)
    {
        end_valid.innerText = "Valid Data format";
    }
    else{
        end_valid.innerText = "Invalid format or Date out of bounds";        
    }
    
})

startDate.addEventListener("input", (e) => {
  
    var parts = e.target.value.split("-")
    var day = parseInt(parts[2], 10)
    var month = parseInt(parts[1], 10)
    var year = parseInt(parts[0], 10)
    //end_valid.innerText = "Valid Data format"

    if(year > 2000 && year < 2100 && month != 0 && month < 12 && day != 0 && day < 32)
    {
        start_valid.innerText = "Valid Data format";
    }
    else{
        start_valid.innerText = "Invalid format or Date out of bounds";        
    }
    
})


