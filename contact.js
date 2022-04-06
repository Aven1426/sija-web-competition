function submitForm() {
    let name = document.getElementById('nama').value;
    let pesan = document.getElementById('pesan').value;
    let email = document.getElementById('email').value;

    if (name == "") {
        alert("nama harus di isi");
    } else if (pesan == "") {
        alert('pesan ini harus di isi');
    } else if (pesan == "") {
        alert("ketikan pesan anda");
    }

    console.log(name);
    console.log(email);
    console.log(email);

    let receiveMail = 'ryuhuzu@gmail.com';

    let a = document.createElement('a');

    a.href = 'mailto:' + '?subject=' + email + '&body=Halo nama saya ' + name + ', ' + pesan;

    a.click();
}