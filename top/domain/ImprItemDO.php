<?php

/**
 * 评价大印象返回的印象词接口
 * @author auto create
 */
class ImprItemDO
{
	
	/** 
	 * 印象标签的id
	 **/
	public $attribute_id;
	
	/** 
	 * 被买家评价提及到的印象标签次数
	 **/
	public $count;
	
	/** 
	 * 印象标签情感倾向 1表示正面 -1表示负面 0表示中性
	 **/
	public $status;
	
	/** 
	 * 印象标签的名称
	 **/
	public $title;	
}
?>