import './bootstrap';


let task = document.querySelectorAll('.edit');

task.forEach(e => {
    let editbtn = e.lastElementChild.lastElementChild

    
    

    editbtn.addEventListener('click', () => {

        //* TEXT AREA
        let textArea = editbtn.parentElement.previousElementSibling

        console.log(textArea.value);
        

        textArea.removeAttribute('readonly');
        editbtn.classList.add('hidden')
        

        //*SavebTN
        let saveBtn = editbtn.previousElementSibling.lastElementChild

      


        saveBtn.classList.remove('hidden')

        //*hiddenInput
        let myInput = saveBtn.previousElementSibling
        

        //* replace the input value by text area value after hitting the save button
        saveBtn.addEventListener('click', () => {
            myInput.value = textArea.value
            textArea.setAttribute('readonly', 1)
            
        })

        
        
        
    })
    
})

