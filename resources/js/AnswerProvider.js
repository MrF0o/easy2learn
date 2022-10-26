import Qs from './Components/answers';

function preg_quote(str, delimiter) {

    return (str + '')
        .replace(new RegExp('[.\\\\+*?\\[\\^\\]$(){}=!<>|:\\' + (delimiter || '') + '-]', 'g'), '\\$&')
}

function highlight(str, search) {
    return str.replace(new RegExp("(" + preg_quote(search) + ")", 'gi'), "<mark class=\"m-0 p-0\">$1</mark>");
}

class AnswerProvider {
    async search(term, filter) {
        // TODO: get from backend
        const questions = (await axios.post(window.location.href + `mcp/questions/search`, {
            searchQuery: term,
            filter: filter
        })).data;

        const result = [];

        for (let i = 0; i < questions.length; i++) {
            const highlighted = questions[i];
            
            if (filter === 'both') {
                highlighted.question = highlight(highlighted.question, term);
                highlighted.answer = highlight(highlighted.answer, term);
            } else if (filter === 'question') {
                highlighted.question = highlight(highlighted.question, term);
            } else {
                highlighted.answer = highlight(highlighted.answer, term);
            }

            result.push(highlighted);
        }

        return result;
    }

    getAnswer(num) {

    }
}

export default new AnswerProvider();