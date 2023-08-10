<div class="form-group row align-items-center" :class="{'has-danger': errors.has('difficulty'), 'has-success': fields.difficulty && fields.difficulty.valid }">
    <label for="difficulty" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.question.columns.difficulty') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.difficulty" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('difficulty'), 'form-control-success': fields.difficulty && fields.difficulty.valid}" id="difficulty" name="difficulty" placeholder="{{ trans('admin.question.columns.difficulty') }}">
        <div v-if="errors.has('difficulty')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('difficulty') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('question'), 'has-success': fields.question && fields.question.valid }">
    <label for="question" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.question.columns.question') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.question" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('question'), 'form-control-success': fields.question && fields.question.valid}" id="question" name="question" placeholder="{{ trans('admin.question.columns.question') }}">
        <div v-if="errors.has('question')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('question') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('answer_a'), 'has-success': fields.answer_a && fields.answer_a.valid }">
    <label for="answer_a" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.question.columns.answer_a') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.answer_a" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('answer_a'), 'form-control-success': fields.answer_a && fields.answer_a.valid}" id="answer_a" name="answer_a" placeholder="{{ trans('admin.question.columns.answer_a') }}">
        <div v-if="errors.has('answer_a')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('answer_a') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('answer_b'), 'has-success': fields.answer_b && fields.answer_b.valid }">
    <label for="answer_b" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.question.columns.answer_b') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.answer_b" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('answer_b'), 'form-control-success': fields.answer_b && fields.answer_b.valid}" id="answer_b" name="answer_b" placeholder="{{ trans('admin.question.columns.answer_b') }}">
        <div v-if="errors.has('answer_b')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('answer_b') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('answer_c'), 'has-success': fields.answer_c && fields.answer_c.valid }">
    <label for="answer_c" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.question.columns.answer_c') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.answer_c" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('answer_c'), 'form-control-success': fields.answer_c && fields.answer_c.valid}" id="answer_c" name="answer_c" placeholder="{{ trans('admin.question.columns.answer_c') }}">
        <div v-if="errors.has('answer_c')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('answer_c') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('answer_d'), 'has-success': fields.answer_d && fields.answer_d.valid }">
    <label for="answer_d" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.question.columns.answer_d') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.answer_d" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('answer_d'), 'form-control-success': fields.answer_d && fields.answer_d.valid}" id="answer_d" name="answer_d" placeholder="{{ trans('admin.question.columns.answer_d') }}">
        <div v-if="errors.has('answer_d')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('answer_d') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('correct_answer'), 'has-success': fields.correct_answer && fields.correct_answer.valid }">
    <label for="correct_answer" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.question.columns.correct_answer') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.correct_answer" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('correct_answer'), 'form-control-success': fields.correct_answer && fields.correct_answer.valid}" id="correct_answer" name="correct_answer" placeholder="{{ trans('admin.question.columns.correct_answer') }}">
        <div v-if="errors.has('correct_answer')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('correct_answer') }}</div>
    </div>
</div>


