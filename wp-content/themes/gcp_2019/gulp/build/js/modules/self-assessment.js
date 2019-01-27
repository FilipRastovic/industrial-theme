$('.mlw_qmn_question > br').remove();

$( 'body' ).on( 'click', '#self-assessment-modal' ).click( function() {
  $('qmn_question_answer.qmn_question_answer_correct >br').remove();
} );
