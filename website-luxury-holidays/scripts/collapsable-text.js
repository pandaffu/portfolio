

function expandDiv() {
    let expandDiv = document.querySelector('.expand');
    if (expandDiv.clientHeight) {
        expandDiv.style.height = 0;
    } else {
        let wrapper = document.querySelector('.measuringWrapper');
        expandDiv.style.height = wrapper.clientHeight + "px";
    }
    document.querySelector(".more-button").value = document.querySelector(".more-button").value == 'Read more' ? 'Read' +
        ' less' : 'Read more';
}