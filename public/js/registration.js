const registrationForm = document.querySelector('.registration')
const registrationCheck = (event) => {
    event.preventDefault()
    if(validation(event)){
        fetch('/api/registration', {
            method: 'POST',
            body: JSON.stringify({
                name: event.currentTarget[0].value,
                email: event.currentTarget[1].value,
                password: event.currentTarget[2].value
            }),
            redirect: "follow",
            mode: "cors"
        })
            .then()
            .catch()
    }else{

    }

}

const validation = (event) => {
    if(event.currentTarget[0].value && (event.currentTarget[2].value.length > 6) && (event.currentTarget[3].value.length > 6) && event.currentTarget[1].value && (event.currentTarget[2].value === event.currentTarget[3].value))
        return true
    return false
}

registrationForm.addEventListener('submit', registrationCheck, false)
