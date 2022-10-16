import Qs from './Components/answers';

function preg_quote(str, delimiter) {

    return (str + '')
        .replace(new RegExp('[.\\\\+*?\\[\\^\\]$(){}=!<>|:\\' + (delimiter || '') + '-]', 'g'), '\\$&')
}

function highlight(str, search) {
    return str.replace(new RegExp("(" + preg_quote(search) + ")", 'gi'), "<mark class=\"m-0 p-0\">$1</mark>");
}

class AnswerProvider {
    search(term) {
        // TODO: get from backend
        const questions = Qs.map(q => JSON.parse(JSON.stringify(q)));
        const result = [];

        for (let i = 0; i < questions.length; i++) {
            if (questions[i].q.toLowerCase().includes(term.toLowerCase()) || questions[i].a.toLowerCase().includes(term.toLowerCase())) {
                if (result.length < 2) {
                    const highlighted = questions[i];
                    highlighted.q = highlight(highlighted.q, term);
                    highlighted.a = highlight(highlighted.a, term);
                    result.push(highlighted);
                } else break;
            }
        }

        return result;
    }

    getAnswer(num) {

    }
}

export default new AnswerProvider();