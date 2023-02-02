function addlink(){
    const url=prompt('Insert url');
    document.execCommand('createlink', false, url);
}

function copy(){
	alert("text copied to clipboard");
	document.execCommand('copy');
}

const content = document.getElementById('text-area'); 

content.addEventListener('mouseenter', function () {
	const a = content.querySelectorAll('a');
	a.forEach(item=> {
		item.addEventListener('mouseenter', function () {
			content.setAttribute('contenteditable', false);
			item.target = '_blank';
		})
		item.addEventListener('mouseleave', function () {
			content.setAttribute('contenteditable', true);
		})
	})
})

const filename = document.getElementById('filename');

function fileHandle(value) {
	if(value === 'new') { 
		content.innerHTML = '';
		filename.value = '';
	} else if(value === 'txt') {
		const blob = new Blob([content.innerText])
		const url = URL.createObjectURL(blob)
		const link = document.createElement('a');
		link.href = url;
		if(filename.value==''){
			link.download = `Untitled.txt`;
		}else{
			link.download = `${filename.value}.txt`;
		}
		link.click();
	} else if(value === 'pdf') {
		if(filename.value==''){
			html2pdf(content).save("Untitled");
		}else{
			html2pdf(content).save(filename.value);
		}
	}
}
