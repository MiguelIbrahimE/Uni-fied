function Decrypt(){
    const key = "Openheimer"
    const value = sessionStorage.getItem("uid");
    console.log(value)
    const decrypted = CryptoJS.AES.decrypt(value,key).toString(CryptoJS.enc.Utf8);;
    console.log(decrypted);
    
    
    if(value == ""){
        doument.location.href="../index.html"
    }
}
