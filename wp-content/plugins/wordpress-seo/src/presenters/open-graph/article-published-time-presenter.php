<?php

namespace Yoast\WP\SEO\Presenters\Open_Graph;

use Yoast\WP\SEO\Presenters\Abstract_Indexable_Tag_Presenter;

/**
 * Presenter class for the Open Graph article published time.
 */
class Article_Published_Time_Presenter extends Abstract_Indexable_Tag_Presenter {

	/**
	 * The tag format including placeholders.
	 *
	 * @var string
	 */
	protected $tag_format = '<meta property="article:published_time" content="%s" />';

	/**
	 * Gets the raw value of a presentation.
	 *
	 * @return string The raw value.
	 */
	public function get() {
		return $this->presentation->open_graph_article_published_time;
	}
}
