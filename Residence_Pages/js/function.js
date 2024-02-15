// start (Multi-steps-form) //
const DOMstrings = {
    stepsBtnClass: 'multisteps-form__progress-btn',
    stepsBtns: document.querySelectorAll(`.multisteps-form__progress-btn`),
    stepsBar: document.querySelector('.multisteps-form__progress'),
    stepsForm: document.querySelector('.multisteps-form__form'),
    stepsFormTextareas: document.querySelectorAll('.multisteps-form__textarea'),
    stepFormPanelClass: 'multisteps-form__panel',
    stepFormPanels: document.querySelectorAll('.multisteps-form__panel'),
    stepPrevBtnClass: 'js-btn-prev',
    stepNextBtnClass: 'js-btn-next' };
  
  
  const removeClasses = (elemSet, className) => {
  
    elemSet.forEach(elem => {
  
      elem.classList.remove(className);
  
    });
  
  };
  
  const findParent = (elem, parentClass) => {
  
    let currentNode = elem;
  
    while (!currentNode.classList.contains(parentClass)) {
      currentNode = currentNode.parentNode;
    }
  
    return currentNode;
  
  };
  
  const getActiveStep = elem => {
    return Array.from(DOMstrings.stepsBtns).indexOf(elem);
  };
  
  const setActiveStep = activeStepNum => {
  
    removeClasses(DOMstrings.stepsBtns, 'js-active');
  
    DOMstrings.stepsBtns.forEach((elem, index) => {
  
      if (index <= activeStepNum) {
        elem.classList.add('js-active');
      }
  
    });
  };
  
  const getActivePanel = () => {
  
    let activePanel;
  
    DOMstrings.stepFormPanels.forEach(elem => {
  
      if (elem.classList.contains('js-active')) {
  
        activePanel = elem;
  
      }
  
    });
  
    return activePanel;
  
  };
  
  const setActivePanel = activePanelNum => {
  
    removeClasses(DOMstrings.stepFormPanels, 'js-active');
  
    DOMstrings.stepFormPanels.forEach((elem, index) => {
      if (index === activePanelNum) {
  
        elem.classList.add('js-active');
  
        setFormHeight(elem);
  
      }
    });
  
  };
  
  const formHeight = activePanel => {
  
    const activePanelHeight = activePanel.offsetHeight;
  
    DOMstrings.stepsForm.style.height = `${activePanelHeight}px`;
  
  };
  
  const setFormHeight = () => {
    const activePanel = getActivePanel();
  
    formHeight(activePanel);
  };
  
  DOMstrings.stepsBar.addEventListener('click', e => {
  
    const eventTarget = e.target;
  
    if (!eventTarget.classList.contains(`${DOMstrings.stepsBtnClass}`)) {
      return;
    }
  
    const activeStep = getActiveStep(eventTarget);
  
    setActiveStep(activeStep);
  
    setActivePanel(activeStep);
  });
  
  DOMstrings.stepsForm.addEventListener('click', e => {
  
    const eventTarget = e.target;
  
    if (!(eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`) || eventTarget.classList.contains(`${DOMstrings.stepNextBtnClass}`)))
    {
      return;
    }
  
    const activePanel = findParent(eventTarget, `${DOMstrings.stepFormPanelClass}`);
  
    let activePanelNum = Array.from(DOMstrings.stepFormPanels).indexOf(activePanel);
  
    if (eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`)) {
      activePanelNum--;
  
    } else {
  
      activePanelNum++;
  
    }
  
    setActiveStep(activePanelNum);
    setActivePanel(activePanelNum);
  
  });
  
  window.addEventListener('load', setFormHeight, false);
  
  window.addEventListener('resize', setFormHeight, false);
  
  
  const setAnimationType = newType => {
    DOMstrings.stepFormPanels.forEach(elem => {
      elem.dataset.animation = newType;
    });
  };
  
  //changing animation
  const animationSelect = document.querySelector('.pick-animation__select');
  
  animationSelect.addEventListener('change', () => {
    const newAnimationType = animationSelect.value;
  
    setAnimationType(newAnimationType);
  });

// End (Multi-steps-form) //

//start (download summary) //


// Get the form element
const form = document.getElementById('summary');

// Create a new jsPDF instance
const pdf = new jsPDF('p', 'mm', 'a4');

// Set up the PDF layout
pdf.setFontSize(12);
pdf.setTextColor('#000000');
pdf.setFontStyle('normal');

// Add a page to the PDF
pdf.addPage();

// Get the form fields and add them to the PDF
const fields = form.querySelectorAll('input, select');
fields.forEach((field) => {
  const fieldName = field.name;
  const fieldValue = field.value;
  pdf.text(fieldName + ':', 10, 20);
  pdf.text(fieldValue, 60, 20);
  pdf.line(10, 22, 190, 22);
  pdf.text('', 10, 30);
});

// Add a download button to the page
const downloadBtn = document.getElementById('downloadBtn');
downloadBtn.addEventListener('click', (e) => {
  e.preventDefault();
  // Save the PDF file
  pdf.save('summary.pdf');
});

//end (download summary)//

//start (print summary) //
document.getElementById('printBtn').addEventListener('click', function() {
  const printArea = document.getElementById('printableArea');
  const printContent = printArea.innerHTML;
  const printWindow = window.open('', '', 'height=600,width=800');
  printWindow.document.write('<html><head><title>Print</title>');
  printWindow.document.write('</head><body >');
  printWindow.document.write(printContent);
  printWindow.document.write('</body></html>');
  printWindow.document.close();
  printWindow.focus();
  printWindow.print();
  printWindow.close();
});
//end (print summary) //