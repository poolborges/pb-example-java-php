package io.github.poolborges.sample.data;

import io.quarkus.hibernate.orm.panache.PanacheEntity;
import io.quarkus.hibernate.orm.panache.PanacheEntityBase;
import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.Table;


/**
 * Organization Entity.
 * 
 * ID field of Long type is generated on create
 *
 */

@Table(name = "organization")
@Entity
public class Organization extends PanacheEntityBase {
    
    //Id is alreday define in PanacheEntity, if required a custom Id extend from PanacheEntityBase
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    public Long id;
    
    @Column(name = "name", length=100, nullable = false)
    private String name;
    
    @Column(name = "country", length=100, nullable = false)
    private String country;

    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getCountry() {
        return country;
    }

    public void setCountry(String country) {
        this.country = country;
    }
    
    
}
