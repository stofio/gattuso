<?php

get_header(); 

$term = get_term_by('slug', get_query_var('term'), 'tipologie');
if((int)$term->parent > 0)
get_template_part('taxonomy', 'tipologie-child');
else
get_template_part('taxonomy', 'tipologie-parent');


get_footer(); 

?>