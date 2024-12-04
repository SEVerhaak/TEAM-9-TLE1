<input type="text" id="form">
<button id="button">Check</button>
<p id="error"></p>

<script>
    let button = document.getElementById('button')
    button.addEventListener('click', checkPassword)

    function checkPassword(){
        let text = document.getElementById('form').value
        let error = document.getElementById('error')
        console.log(text.length)

        if (!(/^[A-Za-z]+$/.test(text)) && !(/^\d+$/.test(text)) && text.length > 6){
            if(text.length > 8 && (/[ `!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/.test(text)) && allCases(text) ){
                console.log('strong password')
                error.innerHTML = 'Je wachtwoord is sterk genoeg!'
            } else{
                console.log('moderate password')
                if (allCases(text)){
                    error.innerHTML = 'Je wachtwoord is gemiddeld, voeg nog speciale karakters toe'

                } else{
                    error.innerHTML = 'Je wachtwoord is gemiddeld, voeg nog hoofdletters toe'
                }
            }
        } else{
            console.log('weak password')
            error.innerHTML = 'Je wachtwoord is wack'
        }

        function allCases(string) {
            const
                upper = /[A-Z]/.test(string),
                lower = /[a-z]/.test(string);

            return upper && lower;
        }
    }
</script>
