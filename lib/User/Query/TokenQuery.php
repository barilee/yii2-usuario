<?php
namespace Da\User\Query;

use Da\User\Model\Token;
use yii\db\ActiveQuery;

class TokenQuery extends ActiveQuery
{
    /**
     * @param $userId
     *
     * @return $this
     */
    public function whereUserId($userId)
    {
        return $this->andWhere(['user_id' => $userId]);
    }

    /**
     * @param $code
     *
     * @return $this
     */
    public function whereCode($code)
    {
        return $this->andWhere(['code' => $code]);
    }

    /**
     * @return $this
     */
    public function whereIsRecoveryType()
    {
        return $this->andWhere(['type' => Token::TYPE_RECOVERY]);
    }

    /**
     * @return $this
     */
    public function whereIsConfirmationType()
    {
        return $this->andWhere(['type' => Token::TYPE_CONFIRM_NEW_EMAIL]);
    }

    /**
     * @param array $types
     *
     * @return $this
     */
    public function whereIsTypes(array $types)
    {
        return $this->andWhere(['in', 'type', $types]);
    }
}
