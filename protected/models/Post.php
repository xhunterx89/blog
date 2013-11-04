<?php

/**
 * This is the model class for table "post".
 *
 * The followings are the available columns in table 'post':
 * @property integer $id
 * @property integer $user_id
 * @property string $title
 * @property string $content
 * @property string $date_create
 *
 * The followings are the available model relations:
 * @property Comment[] $comments
 * @property User $user
 */
class Post extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Post the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'post';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, content', 'required'),
			array('title', 'length', 'max'=>128),
                        array('title', 'safe', 'on'=>'search'),

		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'comments' => array(self::HAS_MANY, 'Comment', 'post_id'),
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
			'commentCount'=> array(self::STAT,'Comment','post_id' ),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'user_id' => 'User',
			'title' => 'Title',
			'content' => 'Content',
			'date_create' => 'Date Create',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('date_create',$this->date_create,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
    protected function beforeSave()
    {
        if(parent::beforeSave())
        {
            if($this->isNewRecord)
            {
                $this->date_create=new CDbExpression('NOW()');
                $this->user_id=Yii::app()->user->id;
            }
            return true;
        }
        else
            return false;
    }
        
    protected function afterDelete()
    {
        parent::afterDelete();
    }

	public function addComment($comment)
	{
		$comment->post_id=$this->id;
		$comment->date_create=new CDbExpression('NOW()');
        //echo $comment->post_id;
		return $comment->save();
	}
}