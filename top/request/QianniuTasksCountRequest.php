<?php
/**
 * TOP API: taobao.qianniu.tasks.count request
 * 
 * @author auto create
 * @since 1.0, 2015.01.19
 */
class QianniuTasksCountRequest
{
	/** 
	 * 业务ID列表，逗号分隔
	 **/
	private $bizIds;
	
	/** 
	 * 与业务相关的买家nick
	 **/
	private $bizNick;
	
	/** 
	 * 业务类型
	 **/
	private $bizType;
	
	/** 
	 * 按时间段搜索的结束日期。不填则不限。格式为2014-01-01
	 **/
	private $endDate;
	
	/** 
	 * 需要排除的任务类型
	 **/
	private $excludeBizType;
	
	/** 
	 * 关键词搜索。只对任务内容进行模糊匹配，以及bizid和biznick进行精准匹配
	 **/
	private $keyWord;
	
	/** 
	 * 任务元id，多个以逗号分隔
	 **/
	private $metadataIds;
	
	/** 
	 * 优先级
	 **/
	private $priority;
	
	/** 
	 * 任务执行者用户数字ID
	 **/
	private $receiverUid;
	
	/** 
	 * 0-不需要提醒，未设提醒时间 1-设置过提醒时间，需要提醒
	 **/
	private $remindFlag;
	
	/** 
	 * 任务发起者用户数字ID
	 **/
	private $senderUid;
	
	/** 
	 * 按时间段搜索时的开始日期，格式如2014-01-01，不填则不限
	 **/
	private $startDate;
	
	/** 
	 * 逗号分隔的任务状态：0-未执行，1-执行中，2-执行完成，3-超时，4-取消，5-忽略
	 **/
	private $status;
	
	/** 
	 * 子任务类型
	 **/
	private $subBizType;
	
	/** 
	 * 逗号分隔的子任务状态，由业务方自定义
	 **/
	private $subStatus;
	
	/** 
	 * 任务的ID列表，用逗号分隔
	 **/
	private $taskIds;
	
	private $apiParas = array();
	
	public function setBizIds($bizIds)
	{
		$this->bizIds = $bizIds;
		$this->apiParas["biz_ids"] = $bizIds;
	}

	public function getBizIds()
	{
		return $this->bizIds;
	}

	public function setBizNick($bizNick)
	{
		$this->bizNick = $bizNick;
		$this->apiParas["biz_nick"] = $bizNick;
	}

	public function getBizNick()
	{
		return $this->bizNick;
	}

	public function setBizType($bizType)
	{
		$this->bizType = $bizType;
		$this->apiParas["biz_type"] = $bizType;
	}

	public function getBizType()
	{
		return $this->bizType;
	}

	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		$this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate()
	{
		return $this->endDate;
	}

	public function setExcludeBizType($excludeBizType)
	{
		$this->excludeBizType = $excludeBizType;
		$this->apiParas["exclude_biz_type"] = $excludeBizType;
	}

	public function getExcludeBizType()
	{
		return $this->excludeBizType;
	}

	public function setKeyWord($keyWord)
	{
		$this->keyWord = $keyWord;
		$this->apiParas["key_word"] = $keyWord;
	}

	public function getKeyWord()
	{
		return $this->keyWord;
	}

	public function setMetadataIds($metadataIds)
	{
		$this->metadataIds = $metadataIds;
		$this->apiParas["metadata_ids"] = $metadataIds;
	}

	public function getMetadataIds()
	{
		return $this->metadataIds;
	}

	public function setPriority($priority)
	{
		$this->priority = $priority;
		$this->apiParas["priority"] = $priority;
	}

	public function getPriority()
	{
		return $this->priority;
	}

	public function setReceiverUid($receiverUid)
	{
		$this->receiverUid = $receiverUid;
		$this->apiParas["receiver_uid"] = $receiverUid;
	}

	public function getReceiverUid()
	{
		return $this->receiverUid;
	}

	public function setRemindFlag($remindFlag)
	{
		$this->remindFlag = $remindFlag;
		$this->apiParas["remind_flag"] = $remindFlag;
	}

	public function getRemindFlag()
	{
		return $this->remindFlag;
	}

	public function setSenderUid($senderUid)
	{
		$this->senderUid = $senderUid;
		$this->apiParas["sender_uid"] = $senderUid;
	}

	public function getSenderUid()
	{
		return $this->senderUid;
	}

	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		$this->apiParas["start_date"] = $startDate;
	}

	public function getStartDate()
	{
		return $this->startDate;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setSubBizType($subBizType)
	{
		$this->subBizType = $subBizType;
		$this->apiParas["sub_biz_type"] = $subBizType;
	}

	public function getSubBizType()
	{
		return $this->subBizType;
	}

	public function setSubStatus($subStatus)
	{
		$this->subStatus = $subStatus;
		$this->apiParas["sub_status"] = $subStatus;
	}

	public function getSubStatus()
	{
		return $this->subStatus;
	}

	public function setTaskIds($taskIds)
	{
		$this->taskIds = $taskIds;
		$this->apiParas["task_ids"] = $taskIds;
	}

	public function getTaskIds()
	{
		return $this->taskIds;
	}

	public function getApiMethodName()
	{
		return "taobao.qianniu.tasks.count";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
