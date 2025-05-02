function favFunction() {
    const element = document.querySelector('.fav button');
    
    if(element.style.backgroundColor === 'rgb(4, 154, 154)'){
        element.style.backgroundColor = '';
        element.style.fontSize = '';
        element.style.width = '';
        element.style.borderRadius = '';
        element.style.textTransform = '';
        element.style.color = '';
    }else{
        element.style.backgroundColor = 'rgb(4, 154, 154)';
        element.style.fontSize = '24px';
        element.style.width = '140px';
        element.style.borderRadius = '10px';
        element.style.textTransform = 'uppercase';
        element.style.color = 'rgb(195, 195, 195)';
    }


}