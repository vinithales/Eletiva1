document.getElementById("idForm").addEventListener("submit", async function(event) {
    event.preventDefault(); 

    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;

    try {
        const response = await fetch("/backend/processarLogin.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({ email: email, password: password })
        });

        const data = await response.json();

        if (data.success) {
   
            window.location.href = data.redirect;
        } else {
    
            document.getElementById("resultado").innerHTML = data.message;
        }
    } catch (error) {
        console.error("Erro:", error);
    }
});
