<?php

/**
 * 绩效数据封装类
 * @author auto create
 */
class PerformanceInfoWrapper
{
	
	/** 
	 * 是否有授权
	 **/
	public $has_authorize;
	
	/** 
	 * 是否有提成配置
	 **/
	public $has_bonus_config;
	
	/** 
	 * 绩效数据列表
	 **/
	public $performance_info_list;
	
	/** 
	 * 统计结束时间
	 **/
	public $statistics_end_time;
	
	/** 
	 * 统计开始时间
	 **/
	public $statistics_start_time;	
}
?>