class User < ApplicationRecord
    before_save {self.email = email.downcase }
    validates :name, presence: true, length: {maximum: 50}
    VALID_EMAIL_REGEX = /\A[\w+\-.]+@[a-z\d\-]+(\.[a-z\d-]+)*\.[a-z]+\z/i
    VALID_PASSWORD_REGEX = /\A[^\s]{6,}\z/
    validates :email, presence: true, length: {maximum: 255},
                format: { with: VALID_EMAIL_REGEX },
                uniqueness: { case_sensitive: false }
    has_secure_password
    validates :password, presence: true, length: { minimum: 6 },
                format: { with: VALID_PASSWORD_REGEX }
end