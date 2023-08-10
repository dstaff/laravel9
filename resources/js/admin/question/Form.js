import AppForm from '../app-components/Form/AppForm';

Vue.component('question-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                difficulty:  '' ,
                question:  '' ,
                answer_a:  '' ,
                answer_b:  '' ,
                answer_c:  '' ,
                answer_d:  '' ,
                correct_answer:  '' ,
                
            }
        }
    }

});