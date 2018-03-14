function choiceClicked(choice) {
    if(choice == '0') {
        var output = `
            <form>
                <input type="hidden" value="0"></input> 
                <span class="sub-title">Please choose your region</span>
                
            
            </form>
            `
        document.getElementById("main").innerHTML = output;
    } else if (choice== '1') {
        var output = `
            <form>
                <input type="hidden" value="1"></input> 
                test
            
            </form>
            `
        document.getElementById("main").innerHTML = output;
    } else {
        document.write("Error: please refresh and try again"); 
    }
}
