async function favFunction(button) {
    const element = button;
    const idFilme = element.getAttribute('data-id-filme');
    const idUser = element.getAttribute('data-id-user');
    const fav = element.style.color == 'rgb(195, 195, 195)' ? 0 : 1;

    try {
        const response = await fetch('./filmebd.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                idFilme: idFilme,
                idUser: idUser,
                fav: fav
            })
        });

        const data = await response.json();

        if (data.success) {
            if (fav == 1) {
                element.style.backgroundColor = 'rgb(4, 154, 154)';
                element.style.fontSize = '24px';
                element.style.width = '140px';
                element.style.borderRadius = '10px';
                element.style.textTransform = 'uppercase';
                element.style.color = 'rgb(195, 195, 195)';
            } else {
                element.style.backgroundColor = '';
                element.style.fontSize = '';
                element.style.width = '';
                element.style.borderRadius = '';
                element.style.textTransform = '';
                element.style.color = '';
            }
        } else {
            alert(`Erro ao salvar favorito: ${data.message || 'Motivo desconhecido'}`);
            setTimeout(() => {
                window.location.href = `./filme.php?id=${idFilme}`;
            }, 100);
        }
    } catch (error) {
        console.error('Erro detalhado:', {
            message: error.message,
            stack: error.stack,
            idFilme,
            idUser,
            fav});
        alert('Erro na comunicação com o servidor: ' + error.message);
    }
}

function visualizacao() {
    const opcao = document.getElementById("tipoVisu");
    const elementCard = document.querySelector(".card");
    const element = document.querySelector(".card ul");
    const elementLI = document.querySelectorAll(".card li");
    const elementIMG = document.querySelectorAll(".card img");
    const elementA = document.querySelectorAll(".card a");

    if (opcao.value === 'lista') {
        elementCard.style.flexDirection = 'column';
        elementCard.style.display = 'unset';
        element.style.display = 'unset';
        elementLI.forEach(elementLI => { 
            elementLI.style.listStyle = 'disc';
            elementLI.style.width = 'unset';
        });
        elementIMG.forEach(elementIMG => { 
            elementIMG.style.width = '150px';
            elementIMG.style.height = '150px';                
        });
        elementA.forEach(elementA => {
            elementA.style.display = 'flex';
        });
    } else {
        elementCard.style.flexDirection = '';
        elementCard.style.display = '';
        element.style.display = '';
        elementLI.forEach(elementLI => { 
            elementLI.style.listStyle = '';
            elementLI.style.width = '';
        });
        elementIMG.forEach(elementIMG => { 
            elementIMG.style.width = '';
            elementIMG.style.height = '';                
        });
        elementA.forEach(elementA => {
            elementA.style.display = '';
        });
    }
}

function visualizacao(){
    const opcao = document.getElementById("tipoVisu");
    const elementCard = document.querySelector(".card");
    const element = document.querySelector(".card ul");
    const elementLI = document.querySelectorAll(".card li");
    const elementIMG = document.querySelectorAll(".card img");
    const elementA = document.querySelectorAll(".card a");

    if(opcao.value == 'lista'){
            elementCard.style.flexDirection = 'column';
            elementCard.style.display = 'unset';
            element.style.display = 'unset';
            elementLI.forEach(elementLI => { 
                elementLI.style.listStyle = 'disc';
                elementLI.style.width = 'unset';
            });
            elementIMG.forEach(elementIMG => { 
                elementIMG.style.width = '150px';
                elementIMG.style.height = '150px';                
            });
            elementA.forEach(elementA => {
                elementA.style.display = 'flex';
            })
    }else{
        elementCard.style.flexDirection = '';
        elementCard.style.display = '';
        element.style.display = '';
        elementLI.forEach(elementLI => { 
            elementLI.style.listStyle = '';
            elementLI.style.width = '';
        });
        elementIMG.forEach(elementIMG => { 
            elementIMG.style.width = '';
            elementIMG.style.height = '';                
        });
        elementA.forEach(elementA => {
            elementA.style.display = '';
        })
    }
}