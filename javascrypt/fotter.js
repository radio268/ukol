const yearParagraph = document.getElementById('year-paragraph');
const currentYear = new Date().getFullYear();
const textBefore = "&copy; ";
const textAfter = " Pootis";
yearParagraph.textContent = `${textBefore}${currentYear}${textAfter}`;