document.addEventListener('DOMContentLoaded', () => {
    const contactForm = document.getElementById('contactForm');
    const formMessage = document.getElementById('formMessage');
    const submitBtn = document.getElementById('submitBtn');

    if (contactForm) {
        contactForm.addEventListener('submit', async (e) => {
            e.preventDefault();

            // Reset messages
            formMessage.className = 'form-message';
            formMessage.innerText = '';
            
            const formData = new FormData(contactForm);
            const data = Object.fromEntries(formData.entries());
            
            // Get CSRF Token
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            submitBtn.disabled = true;
            submitBtn.innerText = 'Envoi en cours...';

            try {
                const response = await fetch('/api/contact', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken,
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify(data)
                });

                const result = await response.json();

                if (response.ok && result.success) {
                    formMessage.classList.add('success');
                    formMessage.innerText = 'Demande envoyée avec succès ! Redirection vers WhatsApp...';

                    // Prepare WhatsApp Message
                    const phoneNumber = '212666187309';
                    const messageText = `Bonjour, je suis intéressé par MyLibrairie.\n\n*Nom:* ${data.name}\n*Téléphone:* ${data.phone}\n*Message:* ${data.message || 'Aucun'}`;
                    const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(messageText)}`;
                    
                    // Redirect to WhatsApp after 1.5 seconds
                    setTimeout(() => {
                        window.open(whatsappUrl, '_blank');
                        contactForm.reset();
                        submitBtn.disabled = false;
                        submitBtn.innerText = 'Envoyer et discuter sur WhatsApp';
                    }, 1500);

                } else {
                    formMessage.classList.add('error');
                    formMessage.innerText = result.message || 'Une erreur est survenue lors de la validation.';
                    submitBtn.disabled = false;
                    submitBtn.innerText = 'Envoyer et discuter sur WhatsApp';
                }
            } catch (error) {
                console.error('Erreur:', error);
                formMessage.classList.add('error');
                formMessage.innerText = 'Erreur de connexion. Veuillez réessayer.';
                submitBtn.disabled = false;
                submitBtn.innerText = 'Envoyer et discuter sur WhatsApp';
            }
        });
    }
});

    // Demo Modal Logic
    const demoForm = document.getElementById('demoForm');
    const demoFormMessage = document.getElementById('demoFormMessage');
    const demoSubmitBtn = document.getElementById('demoSubmitBtn');
    const demoModal = document.getElementById('demoModal');

    // Close modal when clicking outside
    window.addEventListener('click', (e) => {
        if (e.target == demoModal) {
            demoModal.style.display = 'none';
        }
    });

    if (demoForm) {
        demoForm.addEventListener('submit', async (e) => {
            e.preventDefault();

            demoFormMessage.className = 'form-message';
            demoFormMessage.innerText = '';
            
            const formData = new FormData(demoForm);
            const data = Object.fromEntries(formData.entries());
            
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            demoSubmitBtn.disabled = true;
            demoSubmitBtn.innerText = 'Envoi en cours...';

            try {
                const response = await fetch('/api/contact', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken,
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify(data)
                });

                const result = await response.json();

                if (response.ok && result.success) {
                    demoFormMessage.classList.add('success');
                    demoFormMessage.innerText = 'Demande envoyée ! Redirection WhatsApp...';

                    const phoneNumber = '212666187309';
                    const messageText = `Bonjour, je souhaite accéder à la démo de MyLibrairie.\n\n*Nom:* ${data.name}\n*Téléphone:* ${data.phone}\n*Ville:* ${data.city}`;
                    const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(messageText)}`;
                    
                    setTimeout(() => {
                        window.open(whatsappUrl, '_blank');
                        demoForm.reset();
                        demoSubmitBtn.disabled = false;
                        demoSubmitBtn.innerText = "Demander l'accès";
                        demoModal.style.display = 'none';
                    }, 1500);
                } else {
                    demoFormMessage.classList.add('error');
                    demoFormMessage.innerText = 'Erreur lors de l\'envoi. Veuillez réessayer.';
                    demoSubmitBtn.disabled = false;
                    demoSubmitBtn.innerText = "Demander l'accès";
                }
            } catch (error) {
                demoFormMessage.classList.add('error');
                demoFormMessage.innerText = 'Erreur de connexion.';
                demoSubmitBtn.disabled = false;
                demoSubmitBtn.innerText = "Demander l'accès";
            }
        });
    }
});
