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
function updateCookieText()
{
    let encodedText = getCookie('text');
    let textElement = document.getElementById('cookieText');
    let text = encodedText !== null ? b64DecodeUnicode(encodedText) : "______";
    text = text.replace(/\n/g, '<br>');
    if (text !== previousText)
    {
        textElement.innerHTML = text;
        previousText = text;
    }
}
setInterval(updateCookieText, 500);
