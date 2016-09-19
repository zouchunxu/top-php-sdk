<?php
/**
 * TOP API: taobao.qianniu.tasks.get request
 * 
 * @author auto create
 * @since 1.0, 2015.12.16
 */
class QianniuTasksGetRequest
{
	/** 
	 * 业务ID列表，逗号分隔
	 **/
	private $bizIds;
	
	/** 
	 * 业务相关的对象，当前主要表示买家nick
	 **/
	private $bizNick;
	
	/** 
	 * 业务类型
	 **/
	private $bizType;
	
	/** 
	 * 客户端的版本信息
	 **/
	private $clientInfo;
	
	/** 
	 * 当前页数，从1开始
	 **/
	private $currentPage;
	
	/** 
	 * 根据任务创建时间搜索的结束日期（含），不填则不限。例如只查询2014-01-01当天的任务，则将start_date和end_date都设置成2014-01-01
	 **/
	private $endDate;
	
	/** 
	 * 需要排除的任务类型
	 **/
	private $excludeBizType;
	
	/** 
	 * 逗号分隔的字段列表，各个字段含义： id：任务ID receiver_uid：执行者用户数字ID receiver_nick：执行者用户昵称 status：任务状态：0-未执行，1-执行中，2-执行完成，3-超时，4-取消，5-忽略 sub_status：子任务状态，由业务方自定义 finish_strategy：任务完成策略：1-一个人完成，2-所有人完成 gmt_finished：任务完成时间，格式：时间毫秒数 biz_type：业务类型 sub_biz_type：子业务类型 biz_id：业务ID biz_param：业务参数 biz_entry：业务入口 tag：任务标签 memo：任务备注
	 **/
	private $fields;
	
	/** 
	 * 关键词搜索。只对任务内容进行模糊匹配，以及bizid和biznick进行精准匹配
	 **/
	private $keyWord;
	
	/** 
	 * 任务元id，多个以逗号分隔
	 **/
	private $metadataIds;
	
	/** 
	 * 根据任务修改时间搜索的结束时间（含），不填则不限。例如查询“2014-01-01 00:00:10”之前有修改的任务，则将modify_end_time_str设置成“2014-01-01 00:00:10”
	 **/
	private $modifyEndTimeStr;
	
	/** 
	 * 根据任务修改时间搜索的开始时间（含），不填则不限。例如查询“2014-01-01 00:00:10”之后有修改的任务，则将modify_start_time_str设置成“2014-01-01 00:00:10”
	 **/
	private $modifyStartTimeStr;
	
	/** 
	 * 是否需要删除的任务，默认为false
	 **/
	private $needDeleted;
	
	/** 
	 * 是否需要meta信息，默认值为false
	 **/
	private $needMeta;
	
	/** 
	 * 排序字段，可以为id,gmt_create,gmt_finished,metadata_id等
	 **/
	private $orderBy;
	
	/** 
	 * asc为升，desc为降
	 **/
	private $orderType;
	
	/** 
	 * 每页条数
	 **/
	private $pageSize;
	
	/** 
	 * 优先级。即创建时的metadata中的优先级。0为低，1为中，2为高。
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
	 * 根据任务创建时间搜索的开始日期（含），不填则不限。例如只查询2014-01-01当天的任务，则将start_date和end_date都设置成2014-01-01
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

	public function setClientInfo($clientInfo)
	{
		$this->clientInfo = $clientInfo;
		$this->apiParas["client_info"] = $clientInfo;
	}

	public function getClientInfo()
	{
		return $this->clientInfo;
	}

	public function setCurrentPage($currentPage)
	{
		$this->currentPage = $currentPage;
		$this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage()
	{
		return $this->currentPage;
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

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
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

	public function setModifyEndTimeStr($modifyEndTimeStr)
	{
		$this->modifyEndTimeStr = $modifyEndTimeStr;
		$this->apiParas["modify_end_time_str"] = $modifyEndTimeStr;
	}

	public function getModifyEndTimeStr()
	{
		return $this->modifyEndTimeStr;
	}

	public function setModifyStartTimeStr($modifyStartTimeStr)
	{
		$this->modifyStartTimeStr = $modifyStartTimeStr;
		$this->apiParas["modify_start_time_str"] = $modifyStartTimeStr;
	}

	public function getModifyStartTimeStr()
	{
		return $this->modifyStartTimeStr;
	}

	public function setNeedDeleted($needDeleted)
	{
		$this->needDeleted = $needDeleted;
		$this->apiParas["need_deleted"] = $needDeleted;
	}

	public function getNeedDeleted()
	{
		return $this->needDeleted;
	}

	public function setNeedMeta($needMeta)
	{
		$this->needMeta = $needMeta;
		$this->apiParas["need_meta"] = $needMeta;
	}

	public function getNeedMeta()
	{
		return $this->needMeta;
	}

	public function setOrderBy($orderBy)
	{
		$this->orderBy = $orderBy;
		$this->apiParas["order_by"] = $orderBy;
	}

	public function getOrderBy()
	{
		return $this->orderBy;
	}

	public function setOrderType($orderType)
	{
		$this->orderType = $orderType;
		$this->apiParas["order_type"] = $orderType;
	}

	public function getOrderType()
	{
		return $this->orderType;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
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
		return "taobao.qianniu.tasks.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->fields,"fields");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
