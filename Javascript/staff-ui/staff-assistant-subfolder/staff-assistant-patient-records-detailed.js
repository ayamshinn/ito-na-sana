function initStaffAssistantPatientRecordsDetailed() {
    const page = document.querySelector('#staff-assistant-patient-detail-view-page-id');
  if (!page) return;
    console.log('Patient Record Detailed initialized ✅');

    // ===================== READ PATIENT ID FROM URL ===================== //
    const params = new URLSearchParams(window.location.search);
    const patientId = params.get('id');

    if (patientId) {
        console.log(`Loading data for patient: ${patientId}`);

        // Example: show the ID in the detailed header
        const idElement = document.querySelector('.patient-id-display');
        if (idElement) idElement.textContent = `Patient ID: ${patientId}`   ;

        // TODO: Replace with fetch() or data lookup if you connect to backend
        // e.g., fetch(`/api/patients/${patientId}`).then(...)
    }

    // ===================== BACK TO PATIENT LIST ===================== //
    const backBtn = document.querySelector('.back-btn');
    if (backBtn) {
        backBtn.addEventListener('click', () => {
            const url = backBtn.getAttribute('data-target') || '../../HTML/staff-ui/staff-assistant-subfolder/staff-assistant-patient-records-detailed.html';
            if (typeof window.loadPage === 'function') {
                window.loadPage(url);
            } else {
                console.warn('⚠️ loadPage() function not found.');
            }
        });
    }
}

document.addEventListener('DOMContentLoaded', initStaffAssistantPatientRecordsDetailed);
