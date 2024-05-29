let previousText = "";
function getCookie(name)
{
    let nameEQ = name + "=";
    let ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++)
        {
            let c = ca[i];
            while (c.charAt(0) === ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
        }
    return null;
}
function b64DecodeUnicode(str)
{
    try
    {
        let urlDecodedString = decodeURIComponent(str); // URL-decode first
        let binaryString = atob(urlDecodedString); // Base64-decode
        let decodedString = decodeURIComponent(Array.prototype.map.call(binaryString, function(c)
        {
            return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
        }).join(''));
        return decodedString;
    }
    catch (e)
    {
        console.error('Failed to decode base64 URL-encoded string:', e);
        return "Decoding error";
    }
}

function logTextChanges(str1, str2) { 
    // Split the strings into arrays of words 
    const arr1 = str1.split(' '); 
    const arr2 = str2.split(' '); 
  
    // Initialize an array to store the differences 
    const differences = []; 

    // Loop through the arrays and compare the words at each position 
    for (let i = 0; i < Math.max(arr1.length, arr2.length); i++) { 
      if (arr1[i] !== arr2[i]) { 
        const word1 = arr1[i] !== undefined ? arr1[i] : ''; 
        const word2 = arr2[i] !== undefined ? arr2[i] : ''; 
        differences.push(`${word1} => ${word2}`); 
      } 
    } 

    // Join the differences array into a string 
    return differences.join('\n'); 
  
} 

function updateCookieText()
{
    let encodedText = getCookie('text');
    let textElement = document.getElementById('cookieText');
    let logElement = document.getElementById('logText');
    let text = encodedText !== null ? b64DecodeUnicode(encodedText) : "______";
    text = text.replace(/\n/g, '<br>');
    if (text !== previousText)
    {
        logText = logTextChanges(previousText, text);
        if (logText !== '') {
            logElement = logText;
        }
        textElement.innerHTML = text;
        previousText = text;
    }
}
setInterval(updateCookieText, 500);

