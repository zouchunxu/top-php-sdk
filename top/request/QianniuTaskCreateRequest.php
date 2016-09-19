<?php
/**
 * TOP API: taobao.qianniu.task.create request
 * 
 * @author auto create
 * @since 1.0, 2015.01.19
 */
class QianniuTaskCreateRequest
{
	/** 
	 * 任务元数据，JSON格式，例如：
meta = {
            title : "可自定义",
            content : “任务正文”,
            sender_uid : user_id,
            sender_nick : user_nick,
            reminder_flag : 1,
            finish_strategy : 0,
         biz_type : "memo",
         priority : 0
        };
说明：reminder_flag:1表示需要发送任务提醒消息,0表示不需要消息提醒。建议写1;
finish_strategy : 0表示只要一个人完成任务就可以，1表示所有人都需要完成任务。根据场景设置，建议选0;
biz_type : 任务类型，请咨询千牛官方获取正确的任务类型;
priority : 1表示高优先级，0表示普通;
这里的举例为必填字段，一些选填字段没有列出，如有其它需求请联系千牛官方。
	 **/
	private $meta;
	
	/** 
	 * 任务列表，JSON格式的数组，即支持多个接收人，例如：
task = [{
            receiver_uid : user_id,
            receiver_nick : user_nick,
            biz_type : "memo",
            sub_biz_type : "memo",
            biz_id : user_nick,
            biz_nick : user_nick
         }];
上述为必填字段，其它字段请咨询千牛官方。
	 **/
	private $tasks;
	
	private $apiParas = array();
	
	public function setMeta($meta)
	{
		$this->meta = $meta;
		$this->apiParas["meta"] = $meta;
	}

	public function getMeta()
	{
		return $this->meta;
	}

	public function setTasks($tasks)
	{
		$this->tasks = $tasks;
		$this->apiParas["tasks"] = $tasks;
	}

	public function getTasks()
	{
		return $this->tasks;
	}

	public function getApiMethodName()
	{
		return "taobao.qianniu.task.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->meta,"meta");
		RequestCheckUtil::checkNotNull($this->tasks,"tasks");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
