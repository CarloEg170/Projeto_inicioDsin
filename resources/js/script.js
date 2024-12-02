const repositories = document.querySelector('.content-main');

function getApiGitHub(){
    fetch('https://github.com/Corviz/brasilapi-php.git').then(async res => {
        if(!res.ok){
            throw new Error(res.status)
        }
        let data = await res.json()
        console.log(data)
    })
}

getApiGitHub()
