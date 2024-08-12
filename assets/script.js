/* function downloadPDF() {
    const element = document.getElementById('content');

    // Ensure all images are loaded
    const images = element.getElementsByTagName('img');
    let promises = [];

    Array.from(images).forEach(img => {
        promises.push(new Promise((resolve, reject) => {
            if (img.complete) {
                resolve();
            } else {
                img.onload = resolve;
                img.onerror = reject;
            }
        }));
    });

    Promise.all(promises).then(() => {
        const opt = {
            margin: [10, 10, 10, 10],
            filename: 'document.pdf',
            image: { type: 'jpeg', quality: 0.98 },
            html2canvas: { scale: 2, useCORS: true },
            jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
        };

        html2pdf().set(opt).from(element).save().then(() => {
            console.log('PDF generated successfully');
        }).catch((error) => {
            console.error('Error generating PDF:', error);
        });
    }).catch((error) => {
        console.error('Error loading images:', error);
    });
}
 */